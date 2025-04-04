<?php
$user1="peter";
$user2="anil";
$user3="sam";
echo $users1;
//OR
$user=["shivam","sam","peter","bruce"];
echo $users[0];
echo $users[2];
echo $users[1];
echo $users[3];
//iterate by using forloop
for($user=0;$user<count($users);$user++){
    echo " <h2 style='color:blue'>" .$users[$user]."</h2>";
}
?>