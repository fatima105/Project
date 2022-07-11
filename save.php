<?php 

include ('includes/dbcon.php');

if(isset($_POST['add']))
   {
    $color=$categoryname=$IMG=$file_name="";

    $categoryname=$_POST['categoryname'];
    $color=$_POST['color'];
    
$file_name=$_FILES['image']['name'];
$file_name;

$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];
$IMG="IMG/".$file_name;

move_uploaded_file($file_tmp,$IMG);
$query="Insert into category(cat_name,cat_color,cat_img) VALUES('$categoryname','$color','$IMG')";

$queryrun=mysqli_query($conn,$query);
     
if($queryrun){
 header("location:dashboard.php");
   }

}

?>