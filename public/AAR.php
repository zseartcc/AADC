<?php
$file = json_decode(file_get_contents("AAR.txt"), true);
echo $file[0];
?>
