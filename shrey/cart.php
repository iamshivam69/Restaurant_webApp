<?php

session_start();
$servicename = "localhost";
$username ="root";
$password ="";
$database = "user_db";

$connection = new mysqli($servicename , $username , $password , $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


</head>
<body>
    <br />
    <div class="container" style="width: 700px;">
        <h3 align="center";>Indian Food cart</h3>
        <?php
        $query = "SELECT * FROM trymenu ORDER BY id ASC";
        $result = mysqli_query($connection , $query);
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="col-md-4">
            <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                <div class="box01" style="border:1px solid #333; background:#f1f1f1;border-radius:5px; padding:16px;" align="center">
                <!-- <br> -->
                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                    <h4 class="text-danger">₹ <?php echo $row["price"]; ?>.00</h4>

                    <input type="text" name="quantity" class="form-control" value="1">

                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">

                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">

                    <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="ADD TO CART">
                </div>
            </form>       
            <br>   
        </div>
        <?php
            }
        }

        ?>

    </div>
    <br />
    


</body>
</html>