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
    
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* for mid-contents */
    .index{
        background-image: linear-gradient( rgba(255, 253, 253, 0), rgb(235, 223, 223));
        position: relative;
        margin-top:200px;
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
        
        width:50%;
        height:250px;
    }
    /* Hover effect for image and text */
    .item img:hover, .item a:hover{
        transform: scale(1.1);
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
    </style>
</head>
<body>
    <!-- Navbar -->
    <Nav id="header">
        <div class="container flex-row navbar">
            <div  id="navigation" class="nav-section flex-row">
                <div class="nav active" ><a href="#">HOME</a></div>
                <div class="nav"><a href="pages/services.php">SERVICES</a></div>
                <div class="nav"><a href="pages/aboutus.php">ABOUT US</a></div>
                <div class="nav"><a href="pages/contactus.php">CONTACT US</a></div>
                <div class="nav"><a href="pages/signin.html">SIGN IN</a></div>
            </div>
        </div>
    </Nav>
    <!-- End of Navbar -->

    <!-- Banner -->
    <div class="banner ">
        <div id="img"  class="banner-image">
            <img src="images/banner.svg">
        </div>
        <div class="banner-content flex-column">
            <div class="hero-text" style="text-transform: uppercase;">
                 Public Service<br/> Management
            </div>
            
            <div class="button" style="margin-top: 20px;;">
              <a href="#down"><button type="submit" class="btn btn-default btn-large" style="letter-spacing: 20;"> Scroll down</button></a>  
            </div>
        </div>
    </div>

    <!-- End of Banner -->

    <!-- Index Content -->
    <!-- <div id="down"></div> -->
    <div class="index" id="down">
        <div class=" container title" >
            View More
        </div>
        <div class="index-content container ">
            <div class="item flex-column " >
                <img src="images/blog.svg" alt="blog">
                 <a href="pages/services.html" class="text">Services</a>
            </div>
            <div class="item flex-column" >
                <img src="images/cv.svg" alt="cv">
                 <a  href="pages/aboutus.html" class="text">About Us</a>
            </div>
            
            <div class="item flex-column"  >
                <img src="images/research2.svg" alt="">
                <a href="pages/contactus.html" class="text">Contact Us</a>
            </div>
            <div class="item flex-column"  >
                <img src="images/contact.svg" alt="">
                <a href="pages/signin.html" class="text">Sign in </a>
            </div>
        </div>
    </div>
    <!-- End of Index Content -->

    <!-- Footer -->
    <!-- Use of flex to style the footer-item -->
    <Footer class="footer">
        <div class="container">
            <div class="row upper-footer ">
                <div class="footer-item " style=" display:flex ; flex-direction:column;">
                    <div class="footer-title">Contact Details</div>
                    <div class="footer-text"><i class="fas fa-envelope"></i> Email</div>
                    <div class="footer-text">sthapityashu@gmail.com</div>
                    <div class="footer-text"><i class="fas fa-phone "></i> Phone</div>
                    <div class="footer-text">+977 9808768922</div>
                    <div class="footer-text">+97701 4226506</div>
                </div>

               
                <div class="footer-item">
                    <div class="sub-text">
                        Follow us on:
    
                    </div>
                    <div class="social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </div>
                </div>
    
                <div class="footer-item"> 
                    <div class="sub-text">Newsletter</div>
                    
                            <form class="newsletter" >
                                <div class="input-group flex-row" >
                                    <input  type="text" name="search" placeholder="Email address">
                                    <button type="submit" class="btn btn-default">Subscribe</button>
                                </div>
                            </form >
                   
                    </div>
                   
                </div>
            </div>
            <div class="lower-footer">
                <div class=" footer-details mini-container  flex-row"  >
                    <div class="left-footer"> &copy; Copyright Yashu &trade;2020. All rights Reserved. </div>
                   <div class="right-footer"> Developed by : Yashu Sthapit</div></div>
            </div>
            
        </div>
    </Footer>
    <!-- End of footer -->
    <!-- INnernal Javascript -->
    <script>
        // Creating array to store images
        var images = ['images/blog.svg', 'images/about.svg', 'images/cv.svg', 'images/research.svg', 'images/research2.svg', 'images/banner.svg'];
            //    Declaration and initialization of varaible x
        var x = 0;
        //  To get the element rederenced with 'img' id. 
        var imgs = document.getElementById('img');
    
        //  slider function is called every 3 seconds  
        setInterval(slider, 3000);

        //function named slider is declares.
         function slider() {
        //    checks if the value of x is less than length of array i.e 6
            if (x < images.length) {
                x = x + 1;  //Increases the value of x by 1 only if the value of x is less than 6
            } else {
                x = 1; // When the value of x reaches 6 it is reset to 1
            }
            // To change the content of "img" id to cause change in images
            // images[x-1] is used to manage the relation between array length and indexing og array
            imgs.innerHTML = "<img src=" + images[x - 1] + ">";
        }
   </script>
   <!-- End of Internal Javascript -->

    <!-- External JavaScript -->
    <script src="js/custom.js"></script>
</body>
</html>