<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file))
echo "file has been uploaded";

?>

