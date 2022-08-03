<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername,$username,$password,$dbname); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../dashboard/images/sm.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "description" content= "Just Basic HTML"/>
    <meta name = "Author" content= " Srijeet"/>
    <meta name = "keywords" content= "HTML CSS JAVASCRIPT"/>
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/featured.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <style>
                    /* for mid-contents */
        .index{
            background-image: linear-gradient( rgba(255, 253, 253, 0), rgb(235, 223, 223));
            position: relative;
            margin-top:200px;
            margin-bottom:0px;
        }
        .index-content{
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-items: center;
            align-items:center;
            grid-gap: 2px;;
        }
        /* Image style*/
        .item img{
            width:100px;
            height:100px;
        }

        /* Style for View More */
        .item .title{
            color: #000;
            font-size:20px;
            margin-top:15px;
            margin-bottom:40px ;
            text-align: center;
            padding-bottom:10px;
            margin-bottom:10px;
            font-size: 30px;;
        }
        .text{
            font-family: 'semibold';
        }
        .carousel-item img{
            max-height:72vh;
        }
       
            .service-title{
                max-width: 50%;
                font-family: 'semibold';
                font-size: 30px;
                padding-bottom:15px;
                text-align: center;
            }
            .service_img_detail{
                width:200px;
                text-align:center;
                padding: 10px 0px;
                font-size:18px;
            }
            .website_detail{
                width:200px;
                height:200px;
            }
    </style>
</head>
<body>
   <?php include '../templates/header.php'; ?>
    <!-- Banner -->
    <div style="height:12px;"></div>
    <div class="banner mb-5 ">
        <div id="img"  class="banner-image">
            <img src="../images/research2.svg" alt="no_img_found">
        </div>
        <div class="banner-content flex-column">
            <div class="hero-text" style="text-transform: uppercase;">
                 E-commerece<br/> Website
            </div>
            
            <div class="button" style="margin-top: 20px;;">
              <a href="login.php"><button type="submit" class="btn btn-default btn-large" style="letter-spacing: 20;"> Login </button></a>  
            </div>
        </div>
    </div>
    <!-- End of Banner -->

    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="../images/slider1.jpg" class="d-block w-100" alt="No_image_found">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="../images/slider2.jpg" class="d-block w-100" alt="No_image_found">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="../images/slider3.jpg" class="d-block w-100" alt="No_image_found">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slider_end -->

    <div class="container">
            <div class="multi-slider-header">
                <div class="d-flex justify-content-center"><h5 class="title mt-5">Featured Products</h5></div>
                <div class="your-class">
                    <?php
                    $product_query="SELECT * FROM products order by id DESC";
                    $product_result = mysqli_query($con,$product_query);
                    $count = 0;
                    while($product_row = mysqli_fetch_assoc($product_result)){
                        echo "
                        <div class=' col-md-6 col-sm-12 pb-1'>
                        <div class='card product-item border-0 mb-4'>
                            <div class='card-header product-img position-relative overflow-hidden bg-transparent border p-0'>
                                <img class='img-fluid w-100' src='".$product_row['image_url']."' alt='>
                            </div>
                            <div class='card-body border-left border-right text-center p-0 pt-4 pb-3'>
                                <h6 class='text-truncate text-center mb-3'>".$product_row['name']."</h6>
                                <div class='d-flex justify-content-center'>
                                    <h6>Rs.".$product_row['price']."</h6>
                                </div>
                            </div>
                            <div class='card-footer d-flex justify-content-between bg-light border'>
                                <a href='productdetail.php?id=".$product_row['id']."' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a>
                                <a href='' class='btn btn-sm text-dark p-0'><i class='fas fa-shopping-cart text-primary mr-1' ></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                        ";
                        $count = $count +1;
                        if($count>=8){
                            break;
                        }
                    }

                    ?>

                </div>
            </div>
    </div>

<!-- services start -->
    <div class="index">
        <div class=" container service-title" >
            Services
        </div>
        <div style="height:50px;"></div>
        <div class=" container ">
                <div class="d-flex ">
                    <div class="px-5" >
                        <img class="website_detail" src="../images/easyreturn.png" alt="no_image_found">
                        <h6 class="service_img_detail">Easy Return</h6>
                    </div>
                    <div class="px-5" >
                        <img class="website_detail" src="../images/f&f.png" alt="no_image_found">
                        <h6 class="service_img_detail">Free & Fast shipping</h6>
                    </div>
                    
                    <div class="px-5"  >
                        <img class="website_detail" src="../images/sg.png" alt="no_image_found">
                        <h6 class="service_img_detail">Satisfaction Gurantee</h6>
                    </div>
                    <div class=" px-5"  >
                        <img class="website_detail" src="../images/money.png" alt="no_image_found">
                        <h6 class="service_img_detail">Money back Gurantee</h6>
                    </div>
                </div>
        </div>
    </div>
  <!-- services end -->
  <div style="height:50px; background-color:rgb(235, 223, 223);"></div>
   <?php include'../templates/footer.php'; ?>
  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="../js/featured.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>


