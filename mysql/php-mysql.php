<?php
$host="localhost";
$username="root";
$password=null;
$database="boy";

$conn= new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("some error".$conn->$connecct_error);
}

echo "connection success";
echo "<br/>";
$result=$conn->query("show tables")->fetch_all();
print_r($result);
?>