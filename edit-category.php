<?php 
include ('includes/dbcon.php');
include ('header.php');
?>
<div class="container-fluid bg-dark" style="min-height:40vh;">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
Edit Category
</div>
<div class="card-body bg-dark">


 <?php
 $cat_id="";
 $cat_id=$_GET['cat_id'];

  if(isset($_POST['edit'])){  ?>
 
  <?php  

    $cat_name=$_POST['categoryname'];
    $cat_colour=$_POST['color'];   
    $categoryimageold=$_POST['categoryimageold'];
    $categoryimage=$_FILES['categoryimage']['name'];
    if( $categoryimage!= ''){
 
$updatefilename=$_FILES['categoryimage']['name'];
$IMG= "IMG/".$updatefilename;
    }
    else{
$updatefilename=$categoryimageold;
$IMG= "IMG/".$updatefilename;
    }
    if(file_exists("IMG/".$_FILES['categoryimage']['name']))
    {
        $filename=$_FILES['categoryimage']['name'];
   
        echo "image already";
    }
else{

    //updating
    $query="UPDATE category SET cat_name='$cat_name',cat_color='$cat_colour', cat_img='$IMG' where cat_id='$cat_id'";
 $sql=mysqli_query($conn,$query);
    if($sql){
      if($_FILES['categoryimage']['name']!='')
      {
        move_uploaded_file($_FILES["categoryimage"]["tmp_name"],"IMG/".$_FILES['categoryimage']['name']);
        unlink("IMG/".$categoryimageold);
      }
header("location:dashboard.php");
    }
    else{
      echo "no";
    }
}
  }
                 
  
  $sql="SELECT * from category where cat_id = '$cat_id'";
  $query=mysqli_query($conn,$sql);
  if(mysqli_num_rows ($query)>0){
    foreach($query as $rows){
        ?>
        <form method="POST" action="" enctype="multipart/form-data">
<h3 class="text-center text-white mt-1 mb-3 ">Edit Category</h3>
<div class="form-group m-3">
    <div class="row"> 
        <div class="col-6 ">
        <label for=""  class="col-sm-6 col-md-6 "text-white mb-2" >Category Name</label>
        </div>
        <div class="col-6 ">
        
        <input type="text" class="col-sm-6 col-md-6" name="categoryname"  class="form-control-lg text-dark"  placeholder="Category"  value="<?php echo $rows['cat_name'];?>">
                        
        </div>
    </div>
  </div>
              
<div class="form-group m-3">
     <div class="row">
                 <div class="col-6">
                  <label for="" class="text-white mb-2"  >Background Color</label>
                   </div>
                    <div class="col-6">
                      <input type="color" name="color" id="myColor" class="form-control-sm align-items-right"   <span style="width :100px; height:20px; background-color: value="<?php   echo $rows['cat_color'] ?>;"></span>
                    
                      </div>
                  
       </div>
</div>
                 <div class="form-group m-3">
                <div class="row">
                    <div class="col-6">
                    <label for="file"  class="mb-2" >Background Image</label>
               
                    </div>
             <div class="col-6">
             <input type="file" name="categoryimage"  class="form-control text-white"  />
             <input type="hidden" name="categoryimageold" value="<?php echo $rows['cat_img'] ?>" class="form-control text-dark"  />
             <img  src="<?php echo " ".$rows['cat_img']; ?>" width="100 px";>
            </div>
             <div>

             </div>
             </div>
             <div class="d-grid mb-4 mt-3">
  <button type="submit"  name ="edit" class="btn btn-warning btn-block ">Update</button>
</div>
</form> 

   <?php 
   


}
  }
  else{

    echo "no record found";
  }


?>
  
 
</div>
</div>
</div>
</div>
</div>