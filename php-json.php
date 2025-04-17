<?php
//array to json
// $user=["name"=>"shivam","age"=>20,"email":"shivamk2000.com@gmail.com"];
// $userJson=json_encode($user);
// print_r($user);
// echo $userJson;
//ajson to array
$data='{"name":"shivam","age":20,"email":"shivamk2000.com@gmail.com"}';
$dataArray=json_decode($data,true);
print_r($dataArray);
?>