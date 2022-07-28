<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername,$username,$password,$dbname); 

$individual_query="SELECT * FROM products WHERE id=".$_GET["id"];
$individual_result=mysqli_query($con,$individual_query);
$individual_row=mysqli_fetch_assoc($individual_result);
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
    <style>
        .offer_size img{
            width: 100%;
        }
        .btn {
  display: inline-block;
  font-weight: 400!important;

  text-align: center!important;
  vertical-align: middle!important;
  user-select: none!important;

  border: 1px solid transparent!important;
  padding: 0.375rem 0.75rem!important;
  font-size: 1rem!important;
  line-height: 1.5!important;
  border-radius: 0!important; 
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out!important;
}

.input-group.quantity.mr-3{
    margin-right:20px;
}
    </style>
    <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=lOsKoRQ8DK2g5u70wVpdc6DUVa-6_XBYdEVtOvxjm4B9nyzWL_PwuBzvwumKaVXg3Bru04h4acczZBiMMefDpIHKUtXC9cyvgX8PifU2E2A" charset="UTF-8"></script>

</head>

<body>
   
    <?php include '../templates/header.php' ?>
     <!-- Topbar Start -->
    <div class="container-fluid">
       <div style="height:27px;"></div>
        <div class="row align-items-center py-3 px-xl-5 mt-5">
            <div class="col-lg-3 d-none d-lg-block">
                
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search" style="font-size: 25px;"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary" style="font-size: 25px;" ></i>
                    <!-- <span class="badge">0</span> -->
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="<?php echo $individual_row['image_url']?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?php echo $individual_row['name']?></h3>
                <h4 class="font-weight-semi-bold mb-4">Rs.<?php echo $individual_row['price']?></h4>
                <p class="mb-4"><?php echo $individual_row['details']?></p>
                
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">   
                            <button class="btn btn-primary btn-minus quantity-button">
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus quantity-button">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
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


    <!-- Footer Start -->
    <?php include '../templates/footer.php' ?>
    <!-- Footer End -->
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->

    <!-- Contact Javascript File -->
    <!-- <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script> -->

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

</body>

</html>