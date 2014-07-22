<?php
$uploads_dir = __DIR__.'/downloads';

if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
$dest = trim(preg_replace('/[\s\t\n\r\s]+/','_',$_FILES['userfile']['name']));
move_uploaded_file ($_FILES['userfile']['tmp_name'],"$uploads_dir/$dest");
}

?>
