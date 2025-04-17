<?php

if($_FILES['fileUpload']){
    $path = $_FILES['fileUpload']['name'];
    $upload_path ="./upload/".$path;
    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$upload_path)){
        echo "file is uplaoded";
    }
    else{
        die("failed to upload");
    }
}else{
    die("no file is found");
}
?>
<!-- terminal commmands -->
<!-- cd  -->
<!-- sudo chmod -R 0777 /Applications/XAMP/htdocs/test/php_form.php/uploads -->