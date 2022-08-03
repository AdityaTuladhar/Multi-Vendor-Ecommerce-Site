<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername, $username, $password, $dbname);
if (!isset($_GET["id"])) {
    header('location:market.php');
}
$individual_query = "SELECT * FROM products WHERE id=" . $_GET["id"];
$individual_result = mysqli_query($con, $individual_query);
$individual_row = mysqli_fetch_assoc($individual_result);


if (isset($_POST['add'])) {
    //echo "<script>alert('" . $_POST['product_id'] . "')</script>";
    /// print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if (in_array($_SESSION["product_id"], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";

            echo "<script>window.location = 'market.php'</script>";
        } else {

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_SESSION["product_id"]
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        $item_array = array(
            'product_id' => $_SESSION["product_id"]
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        // print_r($_SESSION['cart']);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .offer_size img {
            width: 100%;
        }

        .btn {
            display: inline-block;
            font-weight: 400 !important;

            text-align: center !important;
            vertical-align: middle !important;
            user-select: none !important;

            border: 1px solid transparent !important;
            padding: 0.375rem 0.75rem !important;
            font-size: 1rem !important;
            line-height: 1.5 !important;
            border-radius: 0 !important;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
        }

        .input-group.quantity.mr-3 {
            margin-right: 20px;
        }
    </style>
    <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=lOsKoRQ8DK2g5u70wVpdc6DUVa-6_XBYdEVtOvxjm4B9nyzWL_PwuBzvwumKaVXg3Bru04h4acczZBiMMefDpIHKUtXC9cyvgX8PifU2E2A" charset="UTF-8"></script>

</head>

<body>

    <?php include '../templates/header.php' ?>

    <div class="container-fluid">
        <div style="height:27px;"></div>
        <div class="row  py-3 px-xl-5 mt-5">
            <div class="col-lg-3 d-none d-lg-block">

            </div>
            <div class="col-lg-6 col-6 text-left">
                <div id="search">
                    <form class="form-inline" id="search-form" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" id="search1" placeholder="Search" />
                        </div>
                        <button type="submit" id="onSearch" class="btn btn-primary">Search</button>
                    </form>
                </div>

            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="cart.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary" style="font-size: 25px;"></i>
                    <?php

                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                    } else {
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\"></span>";
                    }

                    ?>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar Start -->
    <div id='secret' style="display:none;">
        <!-- Topbar End -->
        <div class="row" id="products">

        </div>
        <!-- Shop Start -->
        <div class='row px-xl-5'>
            <!-- Shop Sidebar Start -->
            <div class='col-lg-3 col-md-12'>
                <!-- Price Start -->
                <div class='border-bottom'>

                </div>
                <!-- Price End -->
                <div class='col-lg-12  d-none d-lg-block'>
                    <a class='btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100' data-toggle='collapse' href='#navbar-vertical' style='height: 65px; margin-top: -1px; padding: 0 30px;'>
                        <h6 class='m-0'>Categories</h6>
                        <i class='fa fa-angle-down text-dark'></i>
                    </a>
                    <nav class='collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0' id='navbar-vertical'>
                        <div class='navbar-nav w-100 overflow-hidden' style='height: 410px'>
                            <?php
                            $category_query = 'SELECT * FROM product_categories';
                            $category_result = mysqli_query($con, $category_query);
                            while ($category_row = mysqli_fetch_assoc($category_result)) {
                                echo "<a href='market.php?category=" . $category_row['id'] . "' class='nav-item nav-link'>" . $category_row['category'] . "</a>";
                            }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class='col-lg-9 col-md-12'>
                <h3 class='mb-5 mt-2' style='text-align:center;'> </h3>
                <div class='row pb-3'>

                </div>
            </div>
            <!-- Shop Product End -->
        </div>

    </div>
    <div class='main-body'>
        <!-- Topbar End -->


        <div class="container-fluid py-5">

            <form action="productdetail.php?id=<?php echo $individual_row['id']?>" method="post">
                <div class="row px-xl-5">
                    <div class="col-lg-5 pb-5">

                        <div id="product-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner border">
                                <div class="carousel-item active">
                                    <img class="w-100 h-100" src="<?php echo $individual_row['image_url'] ?>" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 pb-5">
                        <h3 class="font-weight-semi-bold"><?php echo $individual_row['name'] ?></h3>
                        <h4 class="font-weight-semi-bold mb-4">Rs.<?php echo $individual_row['price'] ?></h4>
                        <p class="mb-4"><?php echo $individual_row['details'] ?></p>

                        <div class="d-flex align-items-center mb-4 pt-2">

                            <button type="submit" name='add' class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
            
                            <?php $_SESSION["product_id"] = $individual_row['id']?>
                        </div>
                        <div class="d-flex pt-2">
                            <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                            <div class="d-inline-flex">
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>

        <!-- Footer Start -->
        <?php include '../templates/footer.php' ?>
        <!-- Footer End -->


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"> </script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js   "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->

        <!-- Contact Javascript File -->
        <!-- <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script> -->

        <!-- Template Javascript -->
        <script src="../js/main.js"></script>
        <!-- Custom Js -->
        <script type="text/javascript">
            $('#onSearch').click(() => {
                var obj = $('#search1').val();
                if ($('#search1').val() == '') {
                    $(".main-body").hide();
                    $("#secret").show();
                    $(".row.pb-3").html('');
                    $(".mb-5.mt-2").text("Search Result");
                } else {

                    $.ajax({
                        url: 'demo1.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            data: obj
                        },
                        success: function(data) {

                            if (data.length == 0) {
                                $(".main-body").hide();
                                $("#secret").show();
                                $(".row.pb-3").html('<h1>No available products </h1>');
                                $(".mb-5.mt-2").text("Search Result");
                            } else {
                                var id = "",
                                    products = "",
                                    name = "",
                                    details = "";

                                for (var i = 0; i < data.length; i++) {
                                    var id = data[i].id,
                                        name = data[i].name,
                                        detail = data[i].details,
                                        price = data[i].price,
                                        rawPrice = price.replace("$", ""),
                                        rawPrice = parseInt(rawPrice.replace(",", "")),
                                        image = data[i].image_url;

                                    products += "<div class='col-lg-3 col-md-3 col-sm-12 pb-1'><div class='card product-item border-0 mb-4'><div class='card-header product-img position-relative overflow-hidden bg-transparent border p-0'><img class='img-fluid w-100' src='" + image + "' alt=''></div><div class='card-body border-left border-right text-center p-0 pt-4 pb-3'><h6 class='text-truncate mb-3'>" + name + "</h6><div class='d-flex justify-content-center'> <h6>Rs." + price + "</h6></div></div><div class='card-footer d-flex justify-content-between bg-light border'><a href='productdetail.php?id=" + id + "' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a><a href='' class='btn btn-sm text-dark p-0'><i class='fas fa-shopping-cart text-primary mr-1'></i>Add To Cart</a></div></div></div>";
                                    //create product cards
                                }
                                // $(".mb-5.mt-2").text("Search Result");
                                // $(".row.pb-3").html(products);
                                $(".main-body").hide();
                                $("#secret").show();
                                $(".row.pb-3").html(products);
                                $(".mb-5.mt-2").text("Search Result");
                            }
                        }
                    })
                }
            })



            //on search form submit
            $("#search-form").submit(function(e) {
                e.preventDefault();
                var query = $("#search-form input").val().toLowerCase();

                $(".product").hide();
                $(".product").each(function() {
                    var make = $(this).data("make").toLowerCase(),
                        model = $(this).data("model").toLowerCase(),
                        type = $(this).data("type").toLowerCase();

                    if (make.indexOf(query) > -1 || model.indexOf(query) > -1 || type.indexOf(query) > -1) {
                        $(this).show();
                    }
                });
            });
        </script>
</body>

</html>