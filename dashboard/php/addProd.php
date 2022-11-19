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
  <link rel="stylesheet" href="../../livrable n°3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../livrable n°3/css/all.min.css" />

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Remix icons -->


  <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="../../livrable n°3/StyleCss/gallery.css" />

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
  <title>Products</title>
  <style>
      @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
      * {
        margin: 0;
        padding: 0;
        user-select: none;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        background-color: #eee;
      }
      .btn {
        position: absolute;
        top: 10px;
        left: 45px;
        height: 37px;
        width: 37px;
        text-align: center;
        background: #1b1b1b;
        border-radius: 3px;
        cursor: pointer;
        transition: left 0.4s ease;
      }
      .btn.click {
        left: 260px;
      }
      .btn span {
        color: white;
        font-size: 15px;
        line-height: 36px;
      }
      .btn.click span:before {
        content: "\f00d";
      }
      .sidebar {
        position: fixed;
        width: 250px;
        height: 100%;
        left: -250px;
        background: #1b1b1b;
        transition: left 0.4s ease;
      }
      .sidebar.show {
        left: 0px;
      }
      .sidebar .text {
        color: white;
        font-size: 19px;
        font-weight: 600;
        line-height: 65px;
        text-align: center;
        background: #1e1e1e;
        letter-spacing: 1px;
      }
      nav ul {
        background: #1b1b1b;
        height: 100%;
        width: 100%;
        list-style: none;
        padding-left: 10px;
      }
      nav ul li {
        line-height: 50px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
      }
      nav ul li:last-child {
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      }
      nav ul li a {
        position: relative;
        color: white;
        text-decoration: none;
        font-size: 13px;
        padding-left: 14px;
        font-weight: 500;
        display: block;
        width: 100%;
        border-left: 3px solid transparent;
      }
      nav ul li.active a {
        color: #fc5404;
        background: #1e1e1e;
        border-left-color: #fc5404;
      }
      nav ul li a:hover {
        background: #1e1e1e;
      }

      .feat-show {
        transition: all 0.5s;
      }

      nav ul li.active ul {
        transition: all 0.5s;
      }
      nav ul ul {
        position: static;
        display: none;
      }

      nav ul.show {
        display: block;
        transition: all 0.5s;
      }

      nav ul ul li {
        line-height: 42px;
        border-top: none;
      }
      nav ul ul li a {
        font-size: 12px;
        color: #e6e6e6;
      }
      nav ul li.active ul li a {
        color: #e6e6e6;
        background: #1b1b1b;
        border-left-color: transparent;
      }

      a:hover {
        color: #fc5404 !important;
      }
      nav ul ul li a:hover {
        color: #fc5404 !important;
        background: #1e1e1e !important;
      }
      nav ul li a span {
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        font-size: 15px;
        transition: transform 0.4s;
      }
      nav ul li a span.rotate {
        transform: translateY(-50%) rotate(-180deg);
      }
      .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #202020;
        z-index: -1;
        text-align: center;
      }
    </style>
</head>

<body>
<?php include("side.php"); ?>
<div class="btn text-bg-dark">
      <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
      <div class="text">Dashboard</div>
      <ul class="main_side">
        <li class="active"><a href="#">Home</a></li>
        <li>
          <a href="#" id="1"
            >Products
            <span class="fas fa-caret-down"></span>
          </a>
          <ul class="item-show-1">
            <li><a href="#">Add Product</a></li>
            <li><a href="#">Update Product</a></li>
          </ul>
        </li>
       
        <li>
          <a href="#" id="2">Settings
            <span class="fas fa-caret-down"></span>
          </a>
          <ul class="item-show-2">
            <li><a href="#">Admin</a></li>
            <li><a href="#">Password</a></li>
         </ul>
        </li>
        <li><a href="#">Log Out</a></li>
      </ul>
    </nav>

  <div class="container py-3 ">
    <div class="main">
      <div class="col d-flex">
        <h1>Edit Product</h1>
      </div>
    </div>
    <div class="row d-flex mt-5">
      <div class="col-10">
        <input class="form-control" id="exampleFormControlInput1" placeholder="Search for product by ID, category, or somthing ...">

      </div>
      <div class="col">
        <button type="button" class="btn btn-outline-secondary">
          <div class="col">
            <i class="ri-filter-3-line"></i>
            Filter
          </div>
        </button>
      </div>
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
              <div class="main-img" id="imgp"><img id="img" src="../../livrable n°3/assets/accessories/4.png" alt="Category"></div>
              <div class="thumblist">
                <img src="../../livrable n°3/assets/accessories/2.png" alt="Category">
                <img src="../../livrable n°3/assets/accessories/3.png" alt="Category">
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



  </div>



  </div>
</body>

</html>