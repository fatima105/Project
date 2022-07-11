<?php

include("./includes/dbcon.php");


if(isset($_GET['cat_id']) && $_GET['cat_id'] !=""){
    $cat_id = $_GET['cat_id'];
  
$sql = "DELETE FROM  category WHERE cat_id = '$cat_id'";
 
$category=mysqli_query($conn,$sql);
if($category){
    header("location:dashboard.php");
}
}else{
   
}
?>

