<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">India-X-Korea.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index2.php">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:5500/Project/Indian.html">Indian Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:5500/Project/Korean.html">Korean Menu</a>
        </li>
      </ul>
      <div>
        <?php 
        $count = 0;
        if (isset($_SESSION['cart'])) {
          $count=count($_SESSION['cart']);
        }
        ?>
        <a href="cart2.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
      </div>  

    </div>
  </div>
</nav>



</body>
</html>