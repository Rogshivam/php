<?php
if(isset($_POST['filename'])){
$fileName="files/".$_POST['filename'];
$content=$_POST['content'];
$file= fopen($fileName,"w") or die ("unabel to createfile");
fwrite($file,$content);
fclose($file);
echo "file created";
}
?>
<form action="" method="post">
    <input type ="text" placeholder="Enter file name" name="filename" />
    <br/>
    <br/>
    <textarea name="content">
    </textarea>
    <br/>
    <br/>
    <button> Create File</button>
</form>
