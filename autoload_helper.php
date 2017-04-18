<?php

/**
 * List of directory and their name to be recursively included
 */
$dir_lookup =  [
                'interfaces' => 'Interface',
                'classes' => 'Class',
                'traits' => 'Trait',
                'tables' =>'Table',
               ];

/**
 * Scanner method. 
 * Loops through a given folder and requires all appropriate files
 * Searches sub-directories as well.
 * @param string $dir
 * @param int $depth
 */
$_require_all= (function ($name, $dir , $depth = 0) {
    // require all php files
    try
        {
           $rdi = new recursiveDirectoryIterator($dir);
           $it = new recursiveIteratorIterator( $rdi );
            
            while( $it->valid())
            {
                if( !$it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php' ){
                         if (strpos($it->getFilename(), $name)) {
                                require_once $it->key();
                           }
                        
                }
                        
                /*** move to the next element ***/
                $it->next();    
            }
        } catch(Exception $e) {
                /*** echo the error message ***/
                echo $e->getMessage();
        }
});

/**
 * Scan the api  $dir_lookup path, recursively including all $dir_lookup files
 */
foreach ($dir_lookup as $dir => $name){
    $_require_all($name,$dir);
}

/**
 * Scan the api Interface/Contract path, recursively including all Interface files
 * @param string $dir
 * @param int $depth
 */
//$_require_all();

/**
 * Scan the api classes path, recursively including all PHP files
 * @param string $dir
 * @param int $depth
 */
//$_require_all('Class','classes');

/**
 * Scan the api Traits path, recursively including all Traits files
 * @param string $dir
 * @param int $depth
 */
//$_require_all('Trait','traits');


/**
 * Scan the api tables path, recursively including all PHP files
 * @param string $dir
 * @param int $depth
 */
//$_require_all('Table','tables');



//$_require_all_models = call_user_func(function ($dir = 'tables', $depth = 0) {
////            if ($depth > $max_scan_depth) {
////                return;
////            }
//
//    // require all php files
//    $scan = glob("$dir/*");
//    foreach ($scan as $path) {
//        if (preg_match('/\Table.php$/', $path)) {
//            require_once $path;
//        }
////                elseif (is_dir($path)) {
////                    $this->_require_all_models($path, $depth+1);
////                }
//    }
//});




