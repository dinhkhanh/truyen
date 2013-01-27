<?php  
foreach ($_FILES["images"]["error"] as $key => $error) {  
    if ($error == UPLOAD_ERR_OK) {  
        $name = md5($_FILES["images"]["name"][$key].time());
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "/var/www/img/hinh/" . $name.'.jpg');
        echo 'http://127.0.0.1/img/hinh/'. $name.'.jpg';
    }  
}   
