<!DOCTYPE html>
<html lang="en">
<head>
    <title>Seesion</title>
</head>
<body>
    <form actions="" methods="post">
        <inputs type="text" name="user" placeholder="Enter user name" />
        <br/>
        <br/>
        <button name="button" value="set" >Set Session </button>
        <br/>
        <br/>
        <button name="button" value="get" >Get Session </button>
        <br/>
        <br/>
        <button name="button" value="delete" >Delelte Session </button>
    </form>
</body>
</html>
<?php
session_start();
if(isset($_POST['button'])){
    if($_POST['buttoon']="set"){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }
    if($_POST['button']=="get"){
        echo $_SESSION['user'];
    }
    if($_post['button']=="delete"){
        session_destroy();
    }
}