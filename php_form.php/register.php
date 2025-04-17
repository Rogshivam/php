<?php
$_REQUEST['dummy']="test";
if($_REQUEST){
    foreach($_REQUEST as $key =>$data){
        echo $key ."is" $data;
        echo "<br/>";
    }
}
?>