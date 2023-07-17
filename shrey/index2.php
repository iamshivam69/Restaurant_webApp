<?php include("header.php"); 
// session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>



    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Buteer Paneer</h5>
                            <p class="card-text">Price : ₹ 359.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Butter Paneer">
                            <input type="hidden" name="Price" value="359.00">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Manchurian</h5>
                            <p class="card-text">Price : ₹ 299.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Manchurian">
                            <input type="hidden" name="Price" value="299.00">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Shahi Paneer</h5>
                            <p class="card-text">Price : ₹ 399.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Shahi Paneer">
                            <input type="hidden" name="Price" value="399.00">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Idli</h5>
                            <p class="card-text">Price : ₹ 159.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Idli">
                            <input type="hidden" name="Price" value="159.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3" style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Dosa</h5>
                            <p class="card-text">Price : ₹ 299.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Dosa">
                            <input type="hidden" name="Price" value="299.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3" style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Medu Vada</h5>
                            <p class="card-text">Price : ₹ 159.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Medu Vada">
                            <input type="hidden" name="Price" value="159.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Butter Naan</h5>
                            <p class="card-text">Price : ₹ 99.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Butter Naan">
                            <input type="hidden" name="Price" value="99.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Chowmein</h5>
                            <p class="card-text">Price : ₹ 99.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Chowmein">
                            <input type="hidden" name="Price" value="99.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Fried Rice</h5>
                            <p class="card-text">Price : ₹ 99.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Fried Rice">
                            <input type="hidden" name="Price" value="99.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Rasmalai</h5>
                            <p class="card-text">Price : ₹ 159.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Rasmalai">
                            <input type="hidden" name="Price" value="159.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Ice Cream</h5>
                            <p class="card-text">Price : ₹ 99.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Ice Cream">
                            <input type="hidden" name="Price" value="99.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Rabri</h5>
                            <p class="card-text">Price : ₹ 59.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Rabri">
                            <input type="hidden" name="Price" value="59.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Kimchi Stew</h5>
                            <p class="card-text">Price : ₹ 259.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Kimchi Stew">
                            <input type="hidden" name="Price" value="259.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Gimbap</h5>
                            <p class="card-text">Price : ₹ 259.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Gimbap">
                            <input type="hidden" name="Price" value="259.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3" style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Bibimbap</h5>
                            <p class="card-text">Price : ₹ 259.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Bibimbap">
                            <input type="hidden" name="Price" value="259.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Tteokbokki</h5>
                            <p class="card-text">Price : ₹ 299.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Tteokbokki">
                            <input type="hidden" name="Price" value="299.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Korean Tofu</h5>
                            <p class="card-text">Price : ₹ 299.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Korean Tofu">
                            <input type="hidden" name="Price" value="299.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Ramen</h5>
                            <p class="card-text">Price : ₹ 199.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Ramen">
                            <input type="hidden" name="Price" value="199.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Jajangmyeon</h5>
                            <p class="card-text">Price : ₹ 259.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Jajangmyeon">
                            <input type="hidden" name="Price" value="259.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Fried Zucuni</h5>
                            <p class="card-text">Price : ₹ 59.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Fried Zucuni">
                            <input type="hidden" name="Price" value="59.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3" style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Coleslaw</h5>
                            <p class="card-text">Price : ₹ 99.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Coleslaw">
                            <input type="hidden" name="Price" value="99.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Taiyaki</h5>
                            <p class="card-text">Price : ₹ 99.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Taiyaki">
                            <input type="hidden" name="Price" value="99.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3" style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Bingsu</h5>
                            <p class="card-text">Price : ₹ 159.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Bingsu">
                            <input type="hidden" name="Price" value="159.00">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"style="margin: 10px 0px;">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <!-- <img src="S:\6week project\Project\food\dosa1.jpg" class="card-img-top"> -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Doracake</h5>
                            <p class="card-text">Price : ₹ 159.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Doracake">
                            <input type="hidden" name="Price" value="159.00">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>