<?php
$users=["shivam", "bob", "binu"];

for each($users as $ x){
    if($x=="tony"){
        continue;
    }
    echo "<h3>".$x."<h3>";
    if($x=="binu"){
        break;
    }
}
foreach($users as $x);
    echo $x;
    echo"<br>";
endforeach
?>