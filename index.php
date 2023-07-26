<?php
$path = 'files';
$files = scandir('files');
$files = array_diff($files,['.','..']);

foreach($files as $file){
 $pos = strpos($file,'-');
 $language = substr($file,0,$pos);
 $language_folder = $path.'/'.$language;
 
 if(!file_exists($language_folder) || !is_dir($language_folder)){
	mkdir($language_folder);
 }
 
 rename($path.'/'.$file,$language_folder.'/'.$file);
}