<?php
include('./config.php');
$students= $conn->prepare("select * from students");
$students->execute();
$result= $students->fetchAll();

echo "<table border='1' >";
foreach($result as $student){
    echo "<tr>
    <td>".$student['name']."</td>
    <td>".$student['course']."</td>
    <td>".$student['batch']."</td>
    <td>".$studen['year']."</td>
    <td>".$student['city']."</td>
    <td><form method='post' >
    <button name=delete value=".$student['id'].">delete</button>
    </form> </td>
    <td><a href='update.php?id=".$student['id']."'>edit</a> </td>
    <tr>";
}
echo "</tabel>";

if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $studens=$conn->prepare("delete from students where id='$id'");
if($student->execute()){
    echo "recod deleted";
}else{
    echo "record not deleted";
}
}
?>