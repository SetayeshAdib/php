<?php
$nazarat = $_POST["نظرات"];
$file = fopen("text.txt", "w");
fwrite($file, $nazarat);
fclose($file)
?>


