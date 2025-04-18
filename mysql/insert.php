<form action="" method="post">
    <input type="text" placeholder="Enter Name" name="name">
    <br/>
    <br/>
    <input type="text" placeholder="Enter Course" name="Course">
    <br/>
    <br/>
    <input type="text" placeholder="Enter Batch" name="Batch">
    <br/>
    <br/>
    <input type="text" placeholder="Enter City" name="City">
    <br/>
    <br/>
    <input type="text" placeholder="Enter Year" name="Year">
    <br/>
    <br/>
    <button>Submit</button>
</form>

<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $course=$_POST['Course'];
    $batch=$_POST['Batch'];
    $city=$_POST['City'];
    $year=$_POST['Year'];
    include("./config.php");
    $student=$conn->prepare("
    INSERT INTO `student` (`id` ,`name`,`course`,`batch`,`city`,`year`)
    VALUES (NULL, '$name', '$course','$batch','$city','$year')
    ");
    $result= $student->execute();
    if($reult){
    echo "DATA inserted";
    }else{
        echo "operation failed";
    }
}

?>