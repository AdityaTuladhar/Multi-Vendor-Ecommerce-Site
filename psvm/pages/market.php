<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername,$username,$password,$dbname); 

if(isset($_GET["category"])){
    $individual_query="SELECT * FROM products WHERE category_id=".$_GET["category"];
    $individual_result=mysqli_query($con,$individual_query);
    $categoryname_query="SELECT * FROM product_categories WHERE id=".$_GET['category'];
    $categoryname_result=mysqli_query($con,$categoryname_query);
    $categoryname_row = mysqli_fetch_assoc($categoryname_result);
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
    <style>
        .offer_size img{
            width: 100%;
        }
    </style>
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
    
    <?php
        if(!isset($_GET["category"])){
            echo "
            <!-- Navbar Start -->
            <div class='container-fluid mb-5'>
                <div class='row border-top px-xl-5 pt-2'>
                    <div class='col-lg-3 d-none d-lg-block'>
                        <a class='btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100' data-toggle='collapse' href='#navbar-vertical' style='height: 65px; margin-top: -1px; padding: 0 30px;'>
                            <h6 class='m-0'>Categories</h6>
                            <i class='fa fa-angle-down text-dark'></i>
                        </a>
                        <nav class='collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0' id='navbar-vertical'>
                            <div class='navbar-nav w-100 overflow-hidden' style='height: 410px'>";
                                $category_query = 'SELECT * FROM product_categories';
                                $category_result = mysqli_query($con,$category_query);
                                while($category_row = mysqli_fetch_assoc($category_result)){
                                    echo "<a href='market.php?category=".$category_row['id']."' class='nav-item nav-link'>".$category_row['category']."</a>";
                                }
                        echo "</div>
                        </nav>
                    </div>
                    <div class='col-lg-9'>
                        <nav class='navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0'>
                            <a href='' class='text-decoration-none d-block d-lg-none'>
                                <h1 class='m-0 display-5 font-weight-semi-bold'><span class='text-primary font-weight-bold border px-3 mr-1'>E</span>Shopper</h1>
                            </a>
                            <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#navbarCollapse'>
                                <span class='navbar-toggler-icon'></span>
                            </button>
        
                        </nav>
                        <div id='header-carousel' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-inner'>
                                <div class='carousel-item active' style='height: 410px;'>
                                    <img class='img-fluid' src='img/carousel-1.jpg' alt='Image'>
                                    <div class='carousel-caption d-flex flex-column align-items-center justify-content-center'>
                                        <div class='p-3' style='max-width: 700px;'>
                                            <h4 class='text-light text-uppercase font-weight-medium mb-3'>10% Off Your First Order</h4>
                                            <h3 class='display-4 text-white font-weight-semi-bold mb-4'>Fashionable Dress</h3>
                                            <a href=' class='btn btn-light py-2 px-3'>Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class='carousel-item' style='height: 410px;'>
                                    <img class='img-fluid' src='img/carousel-2.jpg' alt='Image'>
                                    <div class='carousel-caption d-flex flex-column align-items-center justify-content-center'>
                                        <div class='p-3' style='max-width: 700px;'>
                                            <h4 class='text-light text-uppercase font-weight-medium mb-3'>10% Off Your First Order</h4>
                                            <h3 class='display-4 text-white font-weight-semi-bold mb-4'>Reasonable Price</h3>
                                            <a href=' class='btn btn-light py-2 px-3'>Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class='carousel-control-prev' href='#header-carousel' data-slide='prev'>
                                <div class='btn btn-dark' style='width: 45px; height: 45px;'>
                                    <span class='carousel-control-prev-icon mb-n2'></span>
                                </div>
                            </a>
                            <a class='carousel-control-next' href='#header-carousel' data-slide='next'>
                                <div class='btn btn-dark' style='width: 45px; height: 45px;'>
                                    <span class='carousel-control-next-icon mb-n2'></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar End -->
        
            <!-- Categories Start -->
            <div class='container-fluid pt-5'>
                <div class='row px-xl-5 pb-3'>
                    <div class='col-lg-4 col-md-6 pb-1'>
                        <div class='cat-item d-flex flex-column border mb-4' style='padding: 30px;'>";
                                $category_query = "SELECT * FROM products where category_id=8";
                                $result = mysqli_query($con,$category_query);
                            echo "<p class='text-right'>".mysqli_num_rows($result)." Products</p>
                            <a href='market.php?category=8' class='cat-img position-relative overflow-hidden mb-3'>
                                <img class='img-fluid' src='img/cat-1.jpg' alt=''>
                            </a>
                            <h5 class='font-weight-semi-bold m-0'>Men's Fashion</h5>
                        </div>
                    </div>
                    <div class='col-lg-4 col-md-6 pb-1'>";
                                $category_query = "SELECT * FROM products where category_id=9";
                                $result = mysqli_query($con,$category_query);

                        echo "<div class='cat-item d-flex flex-column border mb-4' style='padding: 30px;'>
                            <p class='text-right'>".mysqli_num_rows($result)." Products</p>
                            <a href='market.php?category=9' class='cat-img position-relative overflow-hidden mb-3'>
                                <img class='img-fluid' src='img/cat-2.jpg' alt=''>
                            </a>
                            <h5 class='font-weight-semi-bold m-0'>Women's Fashion</h5>
                        </div>
                    </div>
                    <div class='col-lg-4 col-md-6 pb-1'>";
                                $category_query = "SELECT * FROM products where category_id=7";
                                $result = mysqli_query($con,$category_query);
                        echo "<div class='cat-item d-flex flex-column border mb-4' style='padding: 30px;'>
                            <p class='text-right'>".mysqli_num_rows($result)." Products</p>
                            <a href='market.php?category=7' class='cat-img position-relative overflow-hidden mb-3'>
                                <img class='img-fluid' src='img/tv.jpg' alt='' style='height:311.33px;'>
                            </a>
                            <h5 class='font-weight-semi-bold m-0'>TV and Home Appliances</h5>
                        </div>
                    </div>
                    <div class='col-lg-4 col-md-6 pb-1'>";
                                $category_query = "SELECT * FROM products where category_id=11";
                                $result = mysqli_query($con,$category_query);
                        echo "<div class='cat-item d-flex flex-column border mb-4' style='padding: 30px;'>
                            <p class='text-right'>".mysqli_num_rows($result)." Products</p>
                            <a href='market.php?category=11' class='cat-img position-relative overflow-hidden mb-3'>
                                <img class='img-fluid' src='img/cat-4.jpg' alt=''>
                            </a>
                            <h5 class='font-weight-semi-bold m-0'>Electronic Accerssories</h5>
                        </div>
                    </div>
                    <div class='col-lg-4 col-md-6 pb-1'>";
                                $category_query = "SELECT * FROM products where category_id=10";
                                $result = mysqli_query($con,$category_query);
                        echo "<div class='cat-item d-flex flex-column border mb-4' style='padding: 30px;'>
                            <p class='text-right'>".mysqli_num_rows($result)." Products</p>
                            <a href='market.php?category=10' class='cat-img position-relative overflow-hidden mb-3'>
                                <img class='img-fluid' src='img/cat-5.jpg' alt=''>
                            </a>
                            <h5 class='font-weight-semi-bold m-0'>Watches, Bags, Jewellery</h5>
                        </div>
                    </div>
                    <div class='col-lg-4 col-md-6 pb-1'>";
                                $category_query = "SELECT * FROM products where category_id=6";
                                $result = mysqli_query($con,$category_query);
                        echo "<div class='cat-item d-flex flex-column border mb-4' style='padding: 30px;'>
                            <p class='text-right'>". mysqli_num_rows($result)." Products</p>
                            <a href='market.php?category=6' class='cat-img position-relative overflow-hidden mb-3'>
                                <img class='img-fluid' src='img/cat-6.jpg' alt=''>
                            </a>
                            <h5 class='font-weight-semi-bold m-0'>Sports and Outdoor</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories End -->
        
            <!-- Offer Start -->
            <div class='container-fluid offer pt-5'>
                <div class='row px-xl-5' style='background-color:rgba(232, 232, 232, 0.3) ;'>
                    <div class='col-md-6 pb-4'>
                        <div class='offer_size position-relative text-center text-md-right text-white mb-2 py-5 px-5'>
                            <img src='../images/offer1.jpg' alt='image'>
                            <!-- <div class='position-relative' style='z-index: 1;'>
                                <h5 class='text-uppercase text-primary mb-3'>20% off the all order</h5>
                                <h1 class='mb-4 font-weight-semi-bold'>Spring Collection</h1>
                                <a href='' class='btn btn-outline-primary py-md-2 px-md-3'>Shop Now</a>
                            </div> -->
                        </div>
                    </div>
                    <div class='col-md-6 pb-4'>
                        <div class='offer_size position-relative text-center text-md-left text-white mb-2 py-5 px-5'>
                            <img src='../images/offer2.jpg' alt='iamge'>
                            <!-- <div class='position-relative' style='z-index: 1;'>
                                <h5 class='text-uppercase text-primary mb-3'>20% off the all order</h5>
                                <h1 class='mb-4 font-weight-semi-bold'>Winter Collection</h1>
                                <a href='' class='btn btn-outline-primary py-md-2 px-md-3'>Shop Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Offer End -->
        
            <!-- Products Start -->
            <div class='container-fluid pt-5'>
                <div class='text-center mb-4'>
                    <h2 class='section-title px-5'><span class='px-2'>Recent Products</span></h2>
                </div>
                <div class='row px-xl-5 pb-3'>";
                        $product_query="SELECT * FROM products order by id DESC";
                        $product_result = mysqli_query($con,$product_query);
                        $count = 0;
                                while($product_row = mysqli_fetch_assoc($product_result)){
                                    echo "
                                    <div class='col-lg-3 col-md-6 col-sm-12 pb-1'>
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

                echo "</div>
            </div>
            <!-- Products End -->
            ";
        }
        else{
            echo "
            <!-- Shop Start -->
            <div class='container-fluid'>
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
                            <div class='navbar-nav w-100 overflow-hidden' style='height: 410px'>";
                                $category_query = 'SELECT * FROM product_categories';
                                $category_result = mysqli_query($con,$category_query);
                                while($category_row = mysqli_fetch_assoc($category_result)){
                                    echo "<a href='market.php?category=".$category_row['id']."' class='nav-item nav-link'>".$category_row['category']."</a>";
                                }
                        echo "</div>
                        </nav>
                        </div>
                    </div>
                    <!-- Shop Sidebar End -->

                    <!-- Shop Product Start -->
                    <div class='col-lg-9 col-md-12'>
                        <h3 class='mb-5 mt-2' style='text-align:center;'>".$categoryname_row['category']."</h3>
                        <div class='row pb-3'>";

                        while($individual_row = mysqli_fetch_assoc($individual_result)){
                            echo "
                            <div class='col-lg-4 col-md-6 col-sm-12 pb-1'>
                            <div class='card product-item border-0 mb-4'>
                                <div class='card-header product-img position-relative overflow-hidden bg-transparent border p-0'>
                                    <img class='img-fluid w-100' src='".$individual_row['image_url']."' alt=''>
                                </div>
                                <div class='card-body border-left border-right text-center p-0 pt-4 pb-3'>
                                    <h6 class='text-truncate mb-3'>".$individual_row['name']."</h6>
                                    <div class='d-flex justify-content-center'>
                                        <h6>Rs.".$individual_row['price']."</h6>
                                    </div>
                                </div>
                                <div class='card-footer d-flex justify-content-between bg-light border'>
                                    <a href='productdetail.php?id=".$individual_row['id']."' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a>
                                    <a href='' class='btn btn-sm text-dark p-0'><i class='fas fa-shopping-cart text-primary mr-1'></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                            ";
                        }
                            
                            
                        echo "</div>
                    </div>
                    <!-- Shop Product End -->
                </div>
            </div>
            <!-- Shop End -->
        
            ";
        }
    ?>
    

    <!-- Footer Start -->
    <?php include '../templates/footer.php' ?>
    <!-- Footer End -->
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>