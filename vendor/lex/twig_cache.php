<?php

echo 'Clearing template cache...';

basePath();

switch( $argv[2] ) {
  case 'all':
    clearCache();
    echo "\nAll Caches cleared.";
    break;
}

function clearCache() {
  include_once('config.php');
  $path = $config['path'];
  deleteDir( $path );
}

function basePath() {
  define('BASEPATH', str_replace("\\", "/"));
}

function deleteDir($dirPath) {
  
  $dir = $dirPath;
  $it = new RecursiveDirectoryIterator($dir);
  $files = new RecursiveIteratorIterator($it,
               RecursiveIteratorIterator::CHILD_FIRST);
  echo "\n";
  foreach($files as $file) {
      if ($file->getFilename() === '.' || $file->getFilename() === '..') {
          continue;
      }
      if ($file->isDir()){
          echo "\n" . $file;
          rmdir($file->getRealPath());
      } else {
          echo "\n" . $file;
          unlink($file->getRealPath());
      }
  }
  echo "\n";
  
}
