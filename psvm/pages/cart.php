<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                // echo "<script>window.location = 'cart.php'</script>";
            }
            if (empty($_SESSION['cart'])) {
                header('location:market.php');
            }
        }
    }
}
?>\
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    a:hover {
        text-decoration: none;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
        background: lightblue;
        background: radial-gradient(white 30%, lightblue 70%);
    }

    .fa-star,
    .fa-star-half {
        color: yellowgreen;
        padding: 3% 0;
    }

    #cart_count {
        text-align: center;
        padding: 0 0.9rem 0.1rem 0.9rem;
        border-radius: 3rem;
    }

    .shopping-cart {
        padding: 3% 0;
    }

    .cart-items+.cart-items {
        padding: 2% 0;
    }

    .price-details h6 {
        padding: 3% 2%;
    }
</style>
<?php include '../templates/header.php' ?>
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>

                <?php

                $total = 0;
                if (isset($_SESSION['cart'])) {
                    $product_id = array_column($_SESSION['cart'], 'product_id');
                    $query = 'select * from products';
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        foreach ($product_id as $id) {
                            if ($row['id'] == $id) {
                                $productid = $row['id']; ?>
                                <form action="cart.php?action=remove&id=<?php echo $productid ?>" method="post" class="cart-items">
                                    <div class="border rounded">
                                        <div class="row bg-white">
                                            <div class="col-md-3 pl-0">
                                                <img src="<?php echo $row['image_url'] ?>" alt="Image1" class="img-fluid">
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="pt-2"><?php echo $row['name'] ?></h5>
                                                <small class="text-secondary">Seller: dailytuition</small>
                                                <h5 class="pt-2">Rs.<?php echo $row['price'] ?></h5>
                                                <!-- <button type="submit" class="btn btn-warning">Save for Later</button> -->
                                                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                                            </div>
                                            <div class="col-md-3 py-5">
                                                <div>
                                                    <button type="button" class="btn bg-light border rounded-circle" id="minus<?php echo $productid ?>"> <i class="fas fa-minus"></i></button>
                                                    <input type="text" value="1" class="form-control w-25 d-inline" id="quantity<?php echo $productid ?>" readonly>
                                                    <button type="button" class="btn bg-light border rounded-circle" id="plus<?php echo $productid ?>"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php $total = $total + (int)$row['price']; ?>
                                <script>
                                    $('#plus' + <?php echo $productid ?>).click(() => {

                                        var count = $('#quantity' + <?php echo $productid ?>).val();
                                        count++;
                                        $('#quantity' + <?php echo $productid ?>).val(count);
                                        //alert($('#totalPrice1').val());
                                        var total = $('#totalPrice1').html();
                                        var sum = parseInt(total) + <?php echo $row['price'] ?>;

                                        $('#totalPrice1').html(sum);
                                        $('#totalPrice2').html(sum);
                                    })
                                    $('#minus' + <?php echo $productid ?>).click(() => {
                                        if ($('#quantity' + <?php echo $productid ?>).val() <= 1) {
                                            alert('quantity cannot be negative or null')
                                        } else {
                                            var count = $('#quantity' + <?php echo $productid ?>).val();
                                            count--;
                                            $('#quantity' + <?php echo $productid ?>).val(count);
                                            var total = $('#totalPrice1').html();
                                            var sum = parseInt(total) - <?php echo $row['price'] ?>;
                                            $('#totalPrice1').html(sum);
                                            $('#totalPrice2').html(sum);
                                        }
                                    })
                                </script>

                <?php }
                        }
                    }
                } else {
                    echo "<h5>Cart is Empty</h5>";
                }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6 class='float-left'>PRICE DETAILS</h6><a href="cart.php" class="btn border float-right">
                    <i class="fas fa-shopping-cart text-primary" style="font-size: 25px;"></i>
                    <?php

                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                    } else {
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\"></span>";
                    }

                    ?>
                </a><br>
                <hr>

                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $count  = count($_SESSION['cart']);
                            echo "<h6>Price ($count items)</h6>";
                        } else {
                            echo "<h6>Price (0 items)</h6>";
                        }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6 class="m-0">
                            <p class="float-left">Rs.</p>
                            <p id='totalPrice1'> <?php echo $total; ?></p>
                        </h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>
                            <p class="float-left">Rs.</p>
                            <p id='totalPrice2'><?php
                                                echo $total;
                                                ?></p>
                        </h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>

</script>