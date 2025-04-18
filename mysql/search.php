<form action="" method="post">
    <input type="text" name="search" placeholder="Enter name for search">
    <br/>
    <br/>
    <button>Search</button>
</form>
<?php
include('./config.php');
if(isset($_POST['search'])){
    $search= $_POST['search'];
    // $student= $conn->prepare("slect * from  student where name='$search'");
    $student= $conn->prepare("slect * from  student where name like'$%search%'");
    $student->execute();
    $result=$student->fetchAll();
    echo "<tabel border='1' >";
    foreach ($students as $student){
        echo "<tr>
        <td>". $student['name']. "</td>
        <td>". $student['course']. "</td>
        <td>". $student['batch']. "</td>
        <td>". $student['city']. "</td>
        <td>". $student['year']. "</td>
        </tr>"
    };
    echo "<table>";

}