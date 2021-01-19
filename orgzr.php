<?php
$handle = opendir($argv[1]);
// Creates a new directory where files will be stored
$new_dir = "$argv[1]/$argv[3]"; 
mkdir($new_dir);
while (false !== ($file = readdir($handle))) {
    $parts = explode('.', $file);
    // As of PHP 8 str_contains() can be used
    if ($parts[count($parts)-1] == $argv[2]) {
        rename("$argv[1]/$file", "$new_dir/$file");
    }
}
closedir($handle);
?>