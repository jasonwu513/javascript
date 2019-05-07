<?php

$path    = './';
$files = scandir($path);

// echo $files;
echo "<pre>";
print_r($files);
echo "<pre>";

for ($i=4; $i < count($files); $i++) { 
    $site = 'http://javascript.yaoshou365.com/';
    echo   "<a href=\"" .$site.$files[$i]."\">".$files[$i]." </a><br>";
}


?>