<!-- <?php
include('pserver.php');
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">


    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

       <!-- Remix icons -->
       <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
     
    <!-- <link
      href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
      rel="stylesheet"
    /> -->
   
    <link
      rel="stylesheet"
      href="../StyleCss/gallery.css"
    />

<title>Products</title>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light text-dark">
<div class="container-fluid navbar-brand">
      <a href="#" class="navbar-brand" onClick="history.go(-1);">
      <i class="ri-arrow-left-line text-black" ></i>
      
      </a>
      <span class=""> Update Product </span>
    </div>
  </nav>




<div class="container py-2 mb-3">
<div class="row d-flex mt-5">
        <div class="col-10">
          <input class="form-control"  id="exampleFormControlInput1" placeholder="Search for product by ID, category, or somthing ...">

        </div>
      <div class="col">
        <button type="button" class="btn btn-outline-secondary">
          <div class="col">
          <i class="ri-filter-3-line"></i>
          Filter
        </div>
      </button>
    </div>
<div class="row my-1 g-5">
  <!-- Product Name  -->
  <div class="col">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product name">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Category</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product category">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Brand</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product brand">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Description</label>
      <div class="form-floating">
        <textarea class="form-control" placeholder="type description here" id="floatingTextarea2" style="height: 100px"></textarea>
        <!-- <label for="floatingTextarea2">product description</label> -->
      </div>
    </div>
    <div class="col-12 d-flex justify-content-between">
      <div class="col p-0 d-flex gap-2">
        <button type="button" class="btn btn-outline-success rounded-5 px-4">Save</button>
        <button type="button" class="btn btn-outline-danger rounded-5 px-4">Delete</button>
      </div>
      <button type="button" class="btn btn-secondary rounded-5 px-4">clear</button>
    </div>
  </div>
  <!-- Product Image -->
  <div class="col-md-6 col-sm-6">
    <label for="exampleFormControlInput1" class="form-label">Product Image</label>

    <div class="card mb-30">
      <a class="card-img-tiles" href="#" data-abc="true">
        <div class="inner">
          <div class="main-img" id="imgp"><img id="img" src="../assets/accessories/4.png" alt="Category"></div>
          <div class="thumblist">
            <img src="../assets/accessories/2.png" alt="Category">
            <img src="../assets/accessories/3.png" alt="Category">
          </div>
        </div>
      </a>
      <div class="card-body p-3 text-center">

        <div class="col d-flex justify-content-between">
          <button type="button" class="btn btn-primary rounded-5 px-4">Main</button>
          <button type="button" class="btn btn-outline-primary rounded-5 px-4">Hover</button>
          <button type="button" class="btn btn-secondary rounded-5 px-4">Clear</button>

        </div>
      </div>
    </div>
  </div>
</div>
</div>


 <!-- JS SCRIPTS -->
 <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>