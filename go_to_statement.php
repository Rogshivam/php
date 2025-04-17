<?php
$x=30;
 echo "before condition <br/>";

 if($x==20){
    goto jump;

 }
 $name="shivam <br/>";
 echo $name;
 //

 jump;
 echo "statement is humped on line no. 15<br/>";
//by using loop
 for ($i=0;$i<20;$i++){
    echo "$i <br>";

    if($i==5){
        gotot outsideloop;
    }
 }
 outsideloop:
 echo "loop is break";
?>