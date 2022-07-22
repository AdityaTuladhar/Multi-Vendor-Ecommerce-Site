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
    <title>About us</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <style>
        /* css for cv page */
        .banner-content{
            width:300px;
            text-align: justify;;
            font-family: 'light';
            font-size:18px;
            padding:15px;
            right:120px;
        }
        .button{
            position:absolute;
            top:500px;
            right:180px;
        }
        .blog .mini-container > div{
            padding:10px;
            margin:25px;
            font-family: 'regular';
            font-size:20px;
            line-height: 140%;
        }
        .text{
            padding:10px;
            margin:10px;
            font-family: 'regular';
            font-size:20px;
            line-height: 140%;
        }

        
        .title img{
            margin-top: 30px;;
            width:400px;;
        }
        #skills img{

            width:300px;
        }
        .text{

           border-radius: 5px;; 
       }
       .tab-content{
        margin-top:60px;
    }
    .cont{
        cursor: pointer;
        text-align: center;
        border-radius: 5px;
        width:180px;
        border: 1px solid #eee;
        margin-bottom:10px;
        overflow: hidden;
        letter-spacing: 0;
        background-color:#009866;
        color:#fff;
    }
    .cont:hover{
        background-color:#00724c;
        border:1px solid #009866;
        color:#fff;
        
    }

</style>
</head>
<body >
    <!-- Navbar -->
    <Nav id="header">
        <div class="container flex-row navbar">
            <div  id="navigation" class="nav-section flex-row">
                <div class="nav" ><a href="../index.php">HOME</a></div>
                <div class="nav "><a href="services.php">SERVICES</a></div>
                <div class="nav active"><a href="aboutus.php">ABOUT US</a></div>
                <div class="nav "><a href="contactus.php">CONTACT US</a></div>
                <div class="nav"><a href="signin.html">SIGN IN</a></div>
            </div>
        </div>
    </Nav>
    <!-- End of Navbar -->

    <!-- Banner -->
    <div class="banner ">
        <div class="banner-image">
            <img src="../images/cv.svg" alt="banner image">
        </div>
        <div class="banner-content">
            <div style="font-size: 15px;">About us
                Four college students were given an opportunity in their Web Programming class to build a website. The four of us came together and decided to build a website which was not only creative and unique but also a website which could help people make their daily life a little easier and simpler.
                We saw first how people in rural areas were short of receiving services which they urgently required such as plumbing problems, a broken door which could be solved by a carpenter and many more services but have no clue where the nearest service is located. With our website we wanted to change that and help those in need of these service achieve a simpler way. of life.
            </div>




        </div>
        
    </div>
    <!-- End of banner -->

    <div id="internal" style="height:100px;"></div>

    
    


    <!-- End of toggle -->
    <!-- Footer -->
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
    <!-- External JS -->
    <script src="../js/custom.js"></script>
</body>
</html>