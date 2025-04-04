<?php
function sum($x,$y){
    echo $x+$y;
    echo "<br/>";
}
sum(20,30);
sum(50,30);
sum(25,30);
function userData($name,$color){
    echo "<h1 style='color:$color' >$name</h1>";
}
user_Data("shivam", "red");

?>