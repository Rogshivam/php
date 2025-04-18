<?php
include('./config.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $getStuden=$conn->prepare("select * from students where id='$id'");
    $getStudent->execute();
    $student= $getStudent->fetchAll();
    $name=$student[0]['name'];
    $course=$student[0]['course'];
    $batch=$student[0]['batch'];
    $year=$studen[0]['year'];
    $city=$student[0]['city'].;
    
}
?>
<form action="" method="post">
    <input type="text" value="<?php echo $name ?>" name="name" />
    <br /><br/>
    <input type="text" value="<?php echo $name ?>" name="course" />
    <br /><br/>
    <input type="text" value="<?php echo $name ?>" name="batch" />
    <br /><br/>
    <input type="text" value="<?php echo $name ?>" name="year" />
    <br /><br/>
    <input type="text" value="<?php echo $name ?>" name="city" />
    <br /><br/>
    <button value="<?php echo $id?>" name="update" >Update Student data </button>
</form>
<?php
if(issset($_POST['update']))
{
    $id= $_POST['update'];
    echo $name= $_POST['name'];
    echo $course= $_POST{'course'};
    echo $batch= $_POST{'batch';}
    echo $year= $_POST{'year'};
    echo $city= $_POST{'city'};
        $updateStudent=$conn->prepare("update students set 
        name='$name',
        course='$course',
        batch='$batch',
        year='$year',
        city='$city',
        where id ='$id'");
        if($updateStudent->execute()){
            header('local:delete_edit.php');
        }else{
            echo "Update failed";
        }

}


?>