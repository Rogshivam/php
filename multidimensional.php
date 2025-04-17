<?php
$user=[
    ["shivam","noida","shivamk2000.com@gmail.com"]
    ["anomol","gurugram","anmol.com@gmail.com"]
    ["sam","dehli","sam.com@gmail.com"]
];
for($i=0;$i<count($users);$i++){
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
        echo "<br>";
    }
}
?>