<?php 

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'rarebeauty');
$ID=$_GET['ID']  ;
$sql = "SELECT * FROM products WHERE ID=$ID"; 

$result = mysqli_query($con, $sql);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title> RareBeauty </title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/> 
    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrapnew -->
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>RareBeauty</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <img src="D:\Downloads\fsd\htdocs\rarebeauty\images\17c0d5d74d0a032550238eb285a66540.jpg" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li> <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li> <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
      </li> <li class="nav-item">
        <a class="nav-link" href="#">Total Price</a>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="col-md-2"></div> 

<div class="col-md-8">
    <div class="row">


        <?php 
        //if (mysqli_num_rows($result) > 0){
        $product = mysqli_fetch_assoc($result);
            ?> 
            <div class="col-md-5">
                <h3> <?= $product['Title'];?></h3>
                <img src="<?= $product['image'];?>" alt="<?=$product['Title'];?>"/>
                <p class="lprice"><b>Rs <?=$product['Price'];?><b></p>
                <p class="desc"> <?=$product['description'];?></p>
                <p class="bname"> <?=$product['Brandname'];?></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="index.php" class="btn btn-primary">Back</a>
    
        </div> 
        
        <?php  ?>

</div>