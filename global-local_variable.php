<?php
// $name="anil";
// function getName(){
//     // $name="peter";
// global $name;
//     echo "local var : $name";
// }

// echo $name;
// echo "<br/>";
// getName();

$name="anil";
funtion test(){
    echo $name;
    function innerTest(){
        $name;
        echo $name;
    }
}

test();
echo "<br>";
innerTest();
echo "<br>";
echo $name;
?>