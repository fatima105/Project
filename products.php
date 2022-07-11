<?php 
include ('includes/dbcon.php');
include ('header.php');
?>

</style>
<div class="container-fluid bg-dark" style="min-height:100vh;">
<div class="container-fluid  bg-dark">
<button class="btn btn-dark btn-lg text-white m-2 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Dashboard</button>

<div class="row">
    <div class="col-12">
        
    <a class="ex-btn trs-03 btn btn-sm text-white  m-2 trs-03" href="dashboard.php"><i class="fa-solid fa-2x fa-arrow-left"></i></a>
            
    </div>
    
</div>

<?php
$sql= "SELECT * from category ORDER by  cat_id Desc";
$query=mysqli_query($conn,$sql);
if ($query){


}


?>

<div class="row bg-dark ">
       <div class="offset-1 col-5  p-2 text-white fs-2 fw-normal">
Products
       </div>
       <div class="offset-3 col-3 pl-2 pr-0  ">
       <button type="button"  class="btn btn-lg btn-warning" data-toggle="modal" data-target="#products"> <i class='fa fa-plus m-1'></i>Products</button>
       </div>
</div>
</div>
<div class="container-fluid bg-dark">
<div class="">
<table class=" table  table-dark table-striped table-hover">
  <thead>
    <tr>
    <th class="fw-bold fs-5" scope="col">#</th>
    <th class="fw-bold fs-5" scope="col">Title</th>
    <th class="fw-bold fs-5" scope="col"> Price</th>
    <th class="fw-bold fs-5"scope="col">Image</th>
    <th class="fw-bold fs-5" scope="col"> Background Color</th>
    <th class="fw-bold fs-5" scope="col">Description</th>
    <th class="fw-bold fs-5" scope="col">Action</th>
    </tr>
  </thead>





<tr>
    <td>1</td>
    <td>XYZ</td>
    <td>4000</td>
    <td><img src="IMG/flower.jpg" style="width:100px; height:100px;"></td>
    <td><span  style="width :100px; height:20px; background-color:#00ccff ; color:#00ccff ;border-radius:30px;"   
      >hello</span></td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt repudiandae dignissimos, quos laborum nihil sapiente. In tempora cum assumenda quam, inventore, officiis officia ex optio error commodi, dolore repudiandae ullam?
      Id obcaecati facere eveniet atque consequatur aliquam inventore omnis esse ipsa dolorem mollitia adipisci delectus itaque debitis perspiciatis, officiis laboriosam sapiente est numquam ut veniam blanditiis. Quas distinctio adipisci aut!</td>
    <td>  <a   href=""> <i class="fa fa-pencil fa-1x text-success m-2"></i></a> <a class="delete" type="hidden" href=""> <i class="fa fa-trash fa-1x text-danger" aria-hidden="true"></i> </a></td>
    </td>
</tr>


</tbody>
</div>
</div>
</div>
<!--Modal is Located here-->
<!-- Modal -->
<div class="modal fade"  style="border:0;"id="products" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable no-border" role="document">
    <div class="modal-content ">
      <div class="modal-header  bg-secondary" style="border:0;">
        <h5 class="modal-title text-light" id="exampleModalScrollableTitle">Add Products</h5>
        <button type="button" class="btn btn-lg close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark">
      <form action="" method="POST" enctype="multipart/form-data">
  
               
                  <div class="form-group mb-3">
                <div class="flex-container" style="display:flex; justify-content: space-between">
                        <div class="box-1">
                        <label for="" class="mb-2" >Product Name</label>
                        </div>
                       <div class="box-2" >
                       <input type="text" name="productname"  class="form-control-sm text-dark"  placeholder="Product Name"  value="">
                  
                       </div>
                    </div>
    
                 </div>
                 <div class="form-group mb-3">
                 <div class="flex-container" style="display:flex; justify-content: space-between;">
                        <div class="box-1">
                        <label for="" class="mb-2" >Price</label>
                        </div>
                       <div class="box-2" >
                       <input type="number" class="form-control-sm 3 text-dark" name="price" placeholder="Enter price" required="">
                  
                       </div>
                
               </div>
</div>
                

                 <div class="form-group mb-3">
                 <div class="flex-container" style="display:flex; justify-content: space-between;">
                        <div class="box-1">
                        <label for="" class="mb-2"  >Background Color</label>
                        </div>
                       <div class="box-2" >
                       <input type="color" name="color" id="myColor" class="form-control-sm mt-2"   value=" ">
                  </div>

               </div>
               </div>



               <div class="form-group mb-3">
                 <div class="flex-container" style="display:flex; justify-content: space-between;">
                        <div class="box-1">
                        <label for=""  class="mb-2" >Background Image</label>
                        </div>
                       <div class="box-2" >
                       <input type="file"  name="image"  class="form-control-sm text-white "   value=" ">
                  </div>
                   
               </div>
               </div>
              

               <div class="form-group mb-3">
                <div class="flex-container" style="display:flex; justify-content: space-between">
                        <div class="box-1">
                        <label for="" class="mb-2" >Product Description</label>
                        </div>
                       <div class="box-2" >
                     
                       <textarea name="description" placeholder="Description" class="form-control-sm" rows="5"></textarea>
                       </div>
                    </div>
    
                 </div>

                    <div class="d-grid gap-2">
                    <button type="submit"  name ="add" class="btn btn-warning ">Save</button>
                    </div>


               </form>
               
      </div>
     
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


