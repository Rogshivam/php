<?php
include ("./config.php");
$getStudent->execute();
$getStudent=$getStudent->fetchAll();

echo "<select>";
echo"<option>Select Name</option>";
foreach($studentData as $student){
    echo "<option valuegddxxx=".$student['id'].">".$student['name']."</option>";
}
echo "</select>";
?>