<?php
function test(){
    echo "test function is called";
}
function apple(){

}
$test = "test";
$apple ="apple";

function main($a){
    $a();
}
main($test);
main($apple);
?>