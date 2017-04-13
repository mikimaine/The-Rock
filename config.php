<?php
  /**
   * The Rock - a micro "framework" built on top of FastRoute (more like with)
   *
   * @author    Moe Szyslak <moe.duffdude@gmail.com>
   * @version   0.6.1
   * @package   Deez Nuts
   */

//use Tables\RockTable;

date_default_timezone_set('Africa/Addis_Ababa');

  class Config {
    private static $CONFIG = [
      /**
       * when the API root directory is accessed from a non root directory
       * set `ROOT_URL` to the root directory for `index.php` file
       * if this is accessed at the root, leave empty
       *
       * example:
       * http://app.io/path_to_api/api/
       * `ROOT_URL` will be `/path_to_api`
       */
      'ROOT_URL' => 'The-Rock',

      'TABLE_PREFIX'  => 'tr001_',
      'HASH' => 'sha512',
      'SALT' => 'canYouSmellWhatTheRockIsCooking',

      // JWT
      'JWT_HEADER' => 'X-Access-Token',
      'JWT_KEY' => 'canYouSmellWhatTheRockIsCooking',
      'JWT_ISS' => 'The Rock',
      'JWT_IAT' => 'now',
      'JWT_ALGORITHM' => 'HS256',

      // S3
      'S3_UPLOAD_DIR' => '__S3__', // relative to the root directory
      'S3_UPLOAD_URL' => '@S3', // appended to the host, http://rock.io/@S3
      'S3_MAX_UPLOAD_SIZE' => 102400, // in bytes (that's ~100KB)
      'S3_FILE_NAME_SIZE' => 6,
      'S3_ALLOWED_MIME' => ['image/jpeg', 'image/png', 'image/gif', 'application/pdf', 'text/rtf', 'application/epub+zip', 'text/plain', 'application/json', 'application/octet-stream', 'application/zip'],

      // database
      'DB_HOST' => 'localhost',
      'DB_USER' => 'postgres',
      'DB_PASSWORD' => 'root',
      'DB_PORT' => 5432,
      'DB_NAME' => 'rock',
      'DEFAULT_DEPTH' => 1,

      // Models/Tables Folder
      'MODEL_PATH' =>'tables',


      // reference key (to be used for reverse referencing)
      'REFERENCE_KEY' => 'reference',

      // CORS
      'CORS_WHITE_LIST' => ['*', 'rock.io', 'foo.com'],
      'CORS_METHODS' => ['GET', 'POST', 'PATCH', 'DELETE'],
      'CORS_HEADERS' => ['Accept', 'Content-Type', 'Content-Range', 'Content-Disposition', 'X-Access-Token'],
      'CORS_MAX_AGE' => '86400',

      // requests that require authentication + tailored permission
      'AUTH_REQUESTS' => [
        'GET'     => [],
        'POST'    => [],
        'PATCH'   => [],
        'DELETE'  => []
      ],

      // request that are NOT allowed
      'FORBIDDEN_REQUESTS' => [
        'GET'     => [],
        'POST'    => [],
        'PATCH'   => [],
        'DELETE'  => []
      ],

      // Moedoo will construct queries based on this configurations
      'TABLES' => []
    ];

      /**
       * Travers though Models/Tables (Config::$CONFIG['MODEL_PATH']) Folder and include models/tables configuration
       */
      public static function init()
      {
          $tables = glob(Config::$CONFIG['MODEL_PATH'].'/*Table.{php}', GLOB_BRACE);
          foreach ($tables as $table){
                  $table = strtr($table,array(Config::$CONFIG['MODEL_PATH'].'/'=>'','.php'=>''));
              if ($table::isActive()){
                  self::bindAuthList($table);
                  self::bindForbiddenList($table);
                  Config::$CONFIG['TABLES'][$table::getTable()] = $table::getConfig();
              }
          }
      }

      /**
       * returns configuration
       *
       * EXCEPTION CODES
       * 1: unknown configuration key requested
       *
       * @param string $key
       * @return mixed
       * @throws Exception
       */
    public static function get ($key = 'TheRock') {
      if (array_key_exists($key, Config::$CONFIG) === false) {
        throw new Exception("undefined key `{$key}`", 1);
      }

      return Config::$CONFIG[$key];
    }

      /**
       * take a table and build its Forbidden List
       * @param $table
       */
      private static function bindForbiddenList($table)
      {
         foreach (Config::$CONFIG['FORBIDDEN_REQUESTS'] as $key => $value){
             in_array($key, $table::getForbiddenRequest()) ? array_push(Config::$CONFIG['FORBIDDEN_REQUESTS'][$key], $table::getTable()) : null;
         }
      }

      /**
       * take a table and build its Auth List
       * @param $table
       */
      private static function bindAuthList($table)
      {
          $table::isAuthGet() ? array_push(Config::$CONFIG['AUTH_REQUESTS']['GET'], $table::getTable()) : null;

          $table::isAuthPost() ? array_push(Config::$CONFIG['AUTH_REQUESTS']['POST'], $table::getTable()) : null;

          $table::isAuthPatch() ? array_push(Config::$CONFIG['AUTH_REQUESTS']['PATCH'], $table::getTable()) : null;

          $table::isAuthDelete() ? array_push(Config::$CONFIG['AUTH_REQUESTS']['DELETE'], $table::getTable()) : null;
      }
  }
