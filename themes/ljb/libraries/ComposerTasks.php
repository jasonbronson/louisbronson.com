<?php


namespace Libraries;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class ComposerTasks {

    protected static $pathTop = __DIR__.'/vendor';
    protected static $iterator = null;

    public static function postUpdate(){

        self::removeAllGitDirectories();

    }

    public static function postInstall(){

        self::removeAllGitDirectories();

    }

    public static function removeAllGitDirectories(){
        echo "**** Removing all .git files from vendor folders ****\n";
        
        $directory = new RecursiveDirectoryIterator(static::$pathTop, RecursiveDirectoryIterator::SKIP_DOTS);
        if (is_null(static::$iterator)) {
            static::$iterator = new RecursiveIteratorIterator($directory, RecursiveIteratorIterator::CHILD_FIRST);
        }
        
        foreach (self::$iterator as $item) {
        
            if ( $item->isDir() ) {
                if ($item->isReadable() ) {
                    if(strpos($item->getPathname(), ".git")){
                        $directoryPaths = explode("/", $item->getPathname());
                        if(end($directoryPaths) == ".git"){
                            $directory = $item->getPathname();
                            self::removeAll($directory);
                        }
                            
                    }
                        

                }
            }

        }
    }

    /**
     * Removes all files and directory
     *
     * @param [type] $dir
     * @return void
     */
    public static function removeAll($dir){

        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );
        
        foreach ($files as $fileinfo) {
            $todo = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
            echo "Removing: {$fileinfo->getRealPath()}\n";
            $todo($fileinfo->getRealPath());
        }
        
        rmdir($dir);

    }

}