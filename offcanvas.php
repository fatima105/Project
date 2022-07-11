<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>

.sidebar-nav .offcanvas {
  width: 280px;

  border: none;
}
.sidebar-nav ul li a {
  font-size: 26px;

  text-decoration: none;
  color: white;
  font-size: 14px;
  display: block;

  padding: 6px 10px;

  transition: 0.5s;
}

.sidebar-nav ul li a:hover {
  background-color: #eeeeee;
  color:black;
  border-radius: 4px;
}
</style>
  </head>
<div class="container-fluid bg-dark">
<button class="btn btn-dark btn-lg text-white m-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Dashboard</button>
</div>

    <div class="sidebar-nav">
<div class="offcanvas offcanvas-start  bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title text-white m-5 fs-4 fw-bold" id="offcanvasScrollingLabel">Dashboard</h5>
    <button type="button" class="btn-close btn btn-light text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
<ul>
<li>
    <a href="dashboard.php"> <i class="fa fa-line-chart s p-2 " aria-hidden="true"></i><span class="item-text fs-4">Dashboard</span></a></li>
</li>
<li>
    <a href="products.php"> <i class="fa fa-users fa-2 p-2" aria-hidden="true"></i><span class="item-text fs-4">Users</span></a></li>
</li>
<li>
    <a href=""> <i class="fa fa-th-list fa-2 xs mb-2 p-2" aria-hidden="true"></i><span class="item-text fs-4">Categories</span></a></li>
</li>
<li><a href="#"><i class="fa fa-sign-out fa-2 xs p-2" aria-hidden="true"></i><span class="item-text fs-4">Logout</span></a></li>

</ul>


</div>
</div>

</div>
<div class="sidebar-nav">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>