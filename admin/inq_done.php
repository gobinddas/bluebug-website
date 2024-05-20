<?php

include('../config/constants.php');


$id = $_GET['id'];




$sql = "UPDATE inquiries SET
status = 'completed'
WHERE id=$id";

$res = mysqli_query($conn, $sql);

if($res==true)
   {
     header("Location: inquiry.php");
}
else{
     echo "ERROR...Failed to delete the data";
}
?>