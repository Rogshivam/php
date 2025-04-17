<?php
$users =["shivam", "sam", "baskher","praveen"];

//print_r($users);
array_push($users,"peter","bruce","tony");

array_pop($users);
array_pop($users);
array_pop($users);

array_splice($users,-4);

print_r($users);

?>
