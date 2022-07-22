<?php 
include('../config.php');
$query="select s_name from services_tbl";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services</title>
    <link rel="icon" href="../dashboard/images/sm.png" type="image/png">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <style>
        <style>
        /* css for research page */
        .banner-content{
            width:300px;
            text-align: justify;
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

        .research-content{
            font-size: 16px;
            margin-top: 30px;
            text-align: justify;
            padding:10px;

        }
        .title img{
            margin-top: 30px;;
            width:400px;;
        }

        .text{

         border-radius: 5px;; 
     }
     .tab-content{
        margin-top:60px;
    }
    .content img{
        width:550px;
        box-shadow: 4px 6px 8px 4px #ccc;;
    }
    .content img:hover{
        transform: scale(1.1);
    }
    .flex-row{
        justify-content: space-around;
    }
    .cont >div{
        margin-top: 10px;;
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
        /* letter-spacing: 2; */
    }
    .img img{
        width:250px;
        height:200px;
        background-color:rgba(85, 135, 243, 0.59);
        display:block;
        border:1px solid;
        
    }
    .img{
        margin:10px;
        text-align: center;
    }
</style>
</head>
<body >
    <!-- Navbar -->
    <Nav id="header">
        <div class="container flex-row navbar" style="justify-content: flex-end;">
            <div  id="navigation" class="nav-section flex-row">
                <div class="nav " ><a href="../index.php">Home</a></div>
                <div class="nav active"><a href="services.php">Services</a></div>
                <div class="nav"><a href="aboutus.php">About us</a></div>
                <div class="nav "><a href="contactus.php">Contact us</a></div>
                <div class="nav"><a href="signin.html">Sign in</a></div>
            </div>
        </div>
    </Nav>
    
    <!-- End of Navbar -->

    <div id="internal" style="height:100px;"></div>

    <!-- Toggle -->
    <!-- Navigation buttons to dynamically change content -->
    <div class="tab" id="tab"  style="">
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            foreach($row as $key =>$v)
            {   
                ?>
                <button class="tablinks active" onclick="openTab(event, '<?php echo strtolower($v);?>')"><?php echo $v; ?></button>
                <?php 
            }
        }
        ?>
    </div>
    <!-- Main content of Reserch page -->
    <div id="plumber" class="tabcontent container " style="display: block;">
        <div class="mid-div" style="font-size: 30px;">Plumbers</div>
        
        <div class="research-content mini-container">
            <div class="flex-row" >
                <?php 
                for($i=0;$i<4;$i++)
                {
                    if($i>=4)
                    {
                        echo "<br>";
                    }
                    else
                    {

                    }
               ?>
                <div class="img">
                    <img src="../images/basketball1.svg" alt="">
                    Hello
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
<!-- End of Division -->

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
<script>

</script>
<script src="../js/custom.js"></script>
</body>
</html>