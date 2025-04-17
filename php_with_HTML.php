<?php
$h2_color="red";
echo "<h1 style='color:blue' > php with html</h1>;
echo "<h1 style='color:green' > php with html</h1>;
?>
<?php
$name ="shivam kumar";
echo "<h1 style= color:oragne' >MY name is".$name."/h1>";
?>

<h1 style="color:red" >
My real name is <?php echo $name; ?>
</h1>

<h2 style="color:gr<?php echo $h2_color;?>"><?php echo "this is h2 tag"; ?></h2>
<h2 style="color:green"><?php echo $name ?></h2>
<h2 style="color:green">my name is<?php echo $name ?></h2>

