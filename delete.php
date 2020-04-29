<?php
include("dbconnection.php");

$id=$_GET['delete'];
$sql="delete from student_data where id=$id";
if(mysqli_query($mysqli,$sql))
{
echo "Record deleted successfully";
}
else
{
echo"Error deleting record:".mysqli_error($mysqli);
}
header('Location:updel.php');
?>