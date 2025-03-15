<?php
$file = fopen("students.txt","r+");
$text = fread($file,filesize("students.txt"));
echo($text);
fclose($file);
?>
