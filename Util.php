<?php
  Class Util {
    /**
     * generates random string
     *
     * @param integer $length the length of the string to be returned
     * @return string
     */
    public static function generate_token($length) {
      $seed = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $size = strlen($seed) - 1;
      $str = '';

      for($i = 0; $i < $length; $i++) {
        $str .= $seed[rand(0, $size)];
      }

      return $str;
    }



    /**
     * given an array and status code it'll return a JSON response
     *
     * @param array $data
     * @param integer $status
     */
    public static function JSON($data, $status) {
      $app = \Slim\Slim::getInstance();
      $response = $app->response;
      $response->setStatus($status);
      $response->headers->set('Content-Type', 'application/json;charset=utf-8');
      echo json_encode($data);
    }



    /**
     * given a string it'll return the hashed form
     *
     * @param string $string
     * @return string
     */
    public static function hash($string) {
      $hash = hash_init(\Config\HASH);
      hash_update($hash, $string);
      hash_update($hash, \Config\SALT);

      return hash_final($hash);
    }



    /**
     * runs security check on CRUD mapping functions
     * 1: checks weather or not table exists in `config` file
     * 2: checks if $method + $table is restricted calls authentication
     * 3: checks if $method + $table is forbidden execution is stopped
     *
     * @param string $method
     * @param string $table
     */
    public static function check($method, $table) {
      if(array_key_exists($table, \Config\TABLES) === false) {
        Util::stop("requested URL was not found");
      }

      if(in_array($table, \Config\RESTRICTED_REQUESTS[$method]) === true) {
        Rock::authenticated();
      }

      if(in_array($table, \Config\FORBIDDEN_REQUESTS[$method]) === true) {
        Util::stop("request is forbidden", 403);
      }
    }



    /**
     * "destroys" the app first by calling `Util::clear_session()`
     * then sends one LAST message before halting
     *
     * @param string $message - message to be sent back with `error` property
     */
    public static function halt($message, $status = 403) {
      Util::clear_session();
      $app = \Slim\Slim::getInstance();
      $response = $app->response;
      $response->headers->set('Content-Type', 'application/json;charset=utf-8');
      $app->halt($status, json_encode(["error" => $message]));
    }



   /**
     * halts execution but does NOT clear the session
     *
     * @param string $message - message to be sent back with `error` property
     */
    public static function stop($message, $status = 404) {
      $app = \Slim\Slim::getInstance();
      $response = $app->response;
      $response->headers->set('Content-Type', 'application/json;charset=utf-8');
      $app->halt($status, json_encode(["error" => $message]));
    }



    /**
     * clears $_SESSION
     */
    public static function clear_session() {
      $app = \Slim\Slim::getInstance();
      $app->deleteCookie(\Config\COOKIE_NAME);
      $_SESSION = [];
      session_destroy();
    }
  }
?>