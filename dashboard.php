<<<<<<< HEAD
<?php 
include ('includes/dbcon.php');
include ('header.php');
?>
   
<div class="container-fluid bg-dark">
<button class="btn btn-dark btn-lg text-white m-3 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Dashboard</button>

<div class="row bg-dark mt-0">
       <div class="offset-1 col-5 mt-5 p-5  text-white fs-2 fw-bold">
        Categories
       </div>
       <div class="offset-3 col-3 mt-5 p-5">
       <button type="button"  class="btn btn-lg btn-warning" data-toggle="modal" data-target="#exampleModalScrollable"> <i class='fa fa-plus m-1'></i>Categories</button>
       </div>
    </div>
</div>
<div class="container-fluid bg-dark ">
    <div class="row">
        <div class="offset-1 col-10">
            <?php
            
             $sql = mysqli_query($conn,"select * from category  ORDER BY cat_id DESC");
             ?>
       
       <?php
if (mysqli_num_rows($sql) > 0) {
?>
<table class="table table-dark table-striped">
  <thead>
    <tr>

      <th class="fw-bold fs-5" scope="col">Category Name</th>
      <th class="fw-bold fs-5" scope="col">Color</th>
      <th class="fw-bold fs-5"scope="col">Image</th>
      <th class="fw-bold fs-5" scope="col">Action</th>
    </tr>
  </thead>
  <?php
$i=0;
while($row = mysqli_fetch_array($sql)) {
?>
  <tbody>
 <tr>
     <td ><?php echo $row['cat_name'] ?></td>
      <td><span
      style="width :100px; height:20px; background-color:<?php   echo $row['cat_color'] ?>;color:<?php   echo $row['cat_color'] ?>;border-radius:30px;"   
      >hello</span></td>
      <td><img width="100px" height="100px" src="http://localhost/CHEERSAPP/<?php echo $row['cat_img']; ?>" /> </td>
      <td> <a   href="edit-category.php?cat_id=<?php echo $row['cat_id']; ?>"> <i class="fa fa-pencil fa-1x text-success m-2"></i></a> <a class="delete" type="hidden" href="delete-category.php?cat_id=<?php echo $row['cat_id']; ?>"> <i class="fa fa-trash fa-1x text-danger" aria-hidden="true"></i> </a></td>
    </tr>
    <?php
$i++;
}
?>


 
  </tbody>
</table>
<?php
}
else{
 ?>   <div class="bg-danger">
    no record found</div>
<?php }
?>
</div>
    </div>

</div>
<!--Modal is Located here-->
<!-- Modal -->
<div class="modal fade"  style="border:0;"id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable no-border" role="document">
    <div class="modal-content ">
      <div class="modal-header  bg-secondary" style="border:0;">
        <h5 class="modal-title text-light" id="exampleModalScrollableTitle">Add Category</h5>
        <button type="button" class="btn btn-lg close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark">
      <form action="save.php" method="POST" enctype="multipart/form-data">
  
               
                  <div class="form-group m-3">
                    <label for="" class="mb-2" >Category Name</label>
                     <input type="text" name="categoryname"  class="form-control-sm text-dark"  placeholder="Category"  value="">
                  
                 </div>
              
                 <div class="form-group m-3 ">
                    <label for="" class="mb-2"  >Background Color</label>
                    <input type="color" name="color" id="myColor" class="form-control-sm"   value=" ">
                 </div>
                 <div class="form-group m-3">
                
                <label for=""  class="mb-2" >Background Image</label>
                <input type="file"  name="image"  class="form-control-sm text-white "   value=" ">
             </div>
             <div class="d-grid gap-2">
             <button type="submit"  name ="add" class="btn btn-warning ">Save</button>
</div>


               </form>
               
      </div>
     
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>   
$('.delete').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'You want to delete this Category',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>

<?php  
include ('footer.php');
?>


=======
<?php 
include ('includes/dbcon.php');
include ('header.php');
?>
   
<div class="container-fluid bg-dark">
<button class="btn btn-dark btn-lg text-white m-3 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Dashboard</button>

<div class="row bg-dark mt-0">
       <div class="offset-1 col-5 mt-5 p-5  text-white fs-2 fw-bold">
        Categories
       </div>
       <div class="offset-3 col-3 mt-5 p-5">
       <button type="button"  class="btn btn-lg btn-warning" data-toggle="modal" data-target="#exampleModalScrollable"> <i class='fa fa-plus m-1'></i>Categories</button>
       </div>
    </div>
</div>
<div class="container-fluid bg-dark ">
    <div class="row">
        <div class="offset-1 col-10">
            <?php
            
             $sql = mysqli_query($conn,"select * from category  ORDER BY cat_id DESC");
             ?>
       
       <?php
if (mysqli_num_rows($sql) > 0) {
?>
<table class="table table-dark table-striped">
  <thead>
    <tr>

      <th class="fw-bold fs-5" scope="col">Category Name</th>
      <th class="fw-bold fs-5" scope="col">Color</th>
      <th class="fw-bold fs-5"scope="col">Image</th>
      <th class="fw-bold fs-5" scope="col">Action</th>
    </tr>
  </thead>
  <?php
$i=0;
while($row = mysqli_fetch_array($sql)) {
?>
  <tbody>
 <tr>
     <td ><?php echo $row['cat_name'] ?></td>
      <td><span
      style="width :100px; height:20px; background-color:<?php   echo $row['cat_color'] ?>;color:<?php   echo $row['cat_color'] ?>;border-radius:30px;"   
      >hello</span></td>
      <td><img width="100px" height="100px" src="http://localhost/CHEERSAPP/<?php echo $row['cat_img']; ?>" /> </td>
      <td> <a   href="edit-category.php?cat_id=<?php echo $row['cat_id']; ?>"> <i class="fa fa-pencil fa-1x text-success m-2"></i></a> <a class="delete" type="hidden" href="delete-category.php?cat_id=<?php echo $row['cat_id']; ?>"> <i class="fa fa-trash fa-1x text-danger" aria-hidden="true"></i> </a></td>
    </tr>
    <?php
$i++;
}
?>


 
  </tbody>
</table>
<?php
}
else{
 ?>   <div class="bg-danger">
    no record found</div>
<?php }
?>
</div>
    </div>

</div>
<!--Modal is Located here-->
<!-- Modal -->
<div class="modal fade"  style="border:0;"id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable no-border" role="document">
    <div class="modal-content ">
      <div class="modal-header  bg-secondary" style="border:0;">
        <h5 class="modal-title text-light" id="exampleModalScrollableTitle">Add Category</h5>
        <button type="button" class="btn btn-lg close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark">
      <form action="save.php" method="POST" enctype="multipart/form-data">
  
               
                  <div class="form-group m-3">
                    <label for="" class="mb-2" >Category Name</label>
                     <input type="text" name="categoryname"  class="form-control-sm text-dark"  placeholder="Category"  value="">
                  
                 </div>
              
                 <div class="form-group m-3 ">
                    <label for="" class="mb-2"  >Background Color</label>
                    <input type="color" name="color" id="myColor" class="form-control-sm"   value=" ">
                 </div>
                 <div class="form-group m-3">
                
                <label for=""  class="mb-2" >Background Image</label>
                <input type="file"  name="image"  class="form-control-sm text-white "   value=" ">
             </div>
             <div class="d-grid gap-2">
             <button type="submit"  name ="add" class="btn btn-warning ">Save</button>
</div>


               </form>
               
      </div>
     
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>   
$('.delete').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'You want to delete this Category',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>

<?php  
include ('footer.php');
?>


>>>>>>> 18e6691b69eaafc4fca13e77a9d49020a974895e
