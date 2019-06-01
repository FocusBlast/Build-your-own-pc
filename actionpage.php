

<?php

$mon=$_POST['monitor'];
$mouse=$_POST['mouse'];
$keyboard=$_POST['keyboard'];
$chassis=$_POST['chassis'];
$cpu=$_POST['cpu'];
$ram=$_POST['ram'];
$gpu=$_POST['GPU'];
$power=$_POST['power'];


$conn=mysqli_connect("localhost","abubakar","abubakar");
 

mysqli_select_db($conn,"desktoppc");

 $sql1="INSERT INTO desktoppc VALUES ('$mon', '$mouse', '$keyboard', '$chassis','$cpu','$ram','$gpu','$power')";


$rev=mysqli_query($conn,$sql1);

if($rev)
{
	echo "<h1>data inserted</h1>";
}
else
{
echo "failed to insert";
}
?>






