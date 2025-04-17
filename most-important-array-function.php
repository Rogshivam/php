<?php
$users=["shivam","peter","sam","bob","anil"];
$user=["name"=>"shivam","age"=>12,"email"=>"shivamk200.com@gmail.com"];
//to check a variabel is array aur not
if(is_array($users)){
    echo "this is an array";
}else{
    echo "this is not an array";
}
//count number of element array 
echo count($users);
//fetching an element from an array
unset($users[3]);
//pushing the at last element into an array
array_push($users,"shivam");
//pushing last element into an array
array_pop($users);
//fetching the key only
print_r(array_keys($users));
//array to string
echo implode($users);
$str="hello, how are you shivam";
//string to array
print_r(explode(",",$str));
//merge the element two arrays into single array
$data=array_merge($user,$users);
$data_r($data);
//removing duplicate elements
$data = array_unique($users);
$print_r($data);
//removing duplicate elements
$usera= array_unique($users);
print_r($users);

?>