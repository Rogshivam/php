<?php
$userDetails = [
    "name"=>"anil",
    "age"=>29,
    "city"=>"delhi",
    "email"=>"abc@test.com",
    "state"=>"UP"
];
echo $userDetails["name"];
echo "<br>";
echo $userDeatails["age"];
echo "<br>";
echo $userDeatails["state"];
echo "<br>";

for each($userDetails as $key => $data){

    echo $key ." is " .$data;
    echo "<br>";

}

?>
