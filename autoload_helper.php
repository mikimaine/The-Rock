<?php


    /**
     * Scan the api tables path, recursively including all PHP files
     * @param string $dir
     * @param int $depth
     */
$_require_all = call_user_func(function ($dir = 'tables', $depth=0)
    {
//            if ($depth > $max_scan_depth) {
//                return;
//            }

            // require all php files
            $scan = glob("$dir/*");
            foreach ($scan as $path) {
                if (preg_match('/\Table.php$/', $path)) {
                    require_once $path;
                }
                elseif (is_dir($path)) {
                    $this->_require_all($path, $depth+1);
                }
            }
    });



