<?php
    
    $file_name  =  $_FILES['file']['name'];
    $file_size =  $_FILES['file']['size'];
    $file_tmp  =  $_FILES['file']['tmp_name'];
    $file_type =  $_FILES['file']['type'];
    
    $filepath = "img/";
    $filePathWithFileName = "img/".$file_name;

  if (!file_exists($filepath)) {
        mkdir($filepath, 0777);
  } 
    move_uploaded_file($file_tmp,$filePathWithFileName);

?>
