<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call PHP Function</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1">
            Call Function
        <button>
    <form>
</body>
</html>
<?php
if(issset($_REQUEST['button'])){
    btn_click();
}

function btn_click(){
    echo "function is called";
}
?>