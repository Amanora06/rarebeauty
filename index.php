<?php 

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'rarebeauty');

$sql = "SELECT * FROM products"; 
$result = $con->query($sql);

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

    <!-- bootstrapnew -->
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
        <a class="nav-link" href="http://localhost/rarebeauty/index.php#">Home <span class="sr-only">(current)</span></a>
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

<!--second child --> 
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
<li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <ul>
</nav>

<!--third child --> 
<div class="bg-light">
  <h3 class="text-center">RareBeauty Store</h3>
  <p class= "text-center">All your makeup needs at one place!</p>
</div>

<?php 
        while($product = mysqli_fetch_assoc($result)):
            ?> 
            <div class="col-md-4 mb-2">
                <div class="card" >
                <img src="<?= $product['image'];?>" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><?=$product['Title'];?></h5>
                <p class="card-text"> Price :- <?=$product['Price'];?></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="details.php?ID=<?=$product['ID'];?>">View more</a>
        </div> 
        </div> 
        </div> 


<?php endwhile; ?>

<div class="bg-info p-3 text-center">
  <p>All rights reserved ©- Designed by PARV-2023</p>
</div>

</body>
</html>