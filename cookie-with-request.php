<form action="" method="post">
    <input type="text" name="user" placeholder="Enter user name"/>
    <br/>
    <br/>
    <button name="button" value="set">Set cookie</button>
    <br/>
    <br/>
    <button name="button" value="display">Display cookie</button>
    <br/>
    <br/>
    <button name="button" value="delete">Delete cookie</button>

</form>
<?php
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        setcookie("user",$val);
        echo "cookie is set";
    }
    if($_POST['button']=='diplay')
    {
        if(isset($_COOKIE['user'])){
            echo $_COOKIE['user'];
        }
    }
    if($_POST['button']=='delete')
    {
        if(isset($_COOKIE['user'])){
            setcookie("user",null,-1);
        }
    }
}
?>