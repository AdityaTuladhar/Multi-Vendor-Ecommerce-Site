<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/all.min.css">
<link rel="stylesheet" href="../css/style.css">
<style>
        .logo img{
                max-width:100px;
                border-radius:90%;
                height:50px;
        }
        /* Navbar */
        #header {
                color: black;
                text-align: center;
                font-weight: bold;
                position: fixed;
                top: 0;
                width: 100%;
                background-color: rgba(245, 245, 245, 0.6);
                z-index: 99;
                padding: 5px 0;
                box-shadow: 0px 1px rgba(0, 0, 0, .6);
        }
        /*Nav img {
                width: 75px;
        }*/
        .navbar {
                margin: 10px 0;
                justify-content: flex-end;
        }
        .nav {
                padding: 0 15px;

                margin: 0 20px;
                /* border-radius: 9%; */
        }
        .nav a {
                color: #3e3e3e;
                border-radius: 10%;
                padding: 5px 5px;
        }
        /* Style for when a page is active */
        .pageActive {
                color: #fff!important;
                border: 1px solid #009688;
                background-color: #009688;
                padding: 5px 15px;
                border-radius: 5px;
        }
        /* Hover effect for navigation bar */
        .nav a:hover {
                color: #fff;
                background-color: #009688;

        }
        .logo{
                flex:20%;
                display:flex;
                justify-content:left;
        }
        .list{
                flex:80%;
        }
</style>
<?php 
$link_arr = explode("/",$_SERVER['REQUEST_URI']);
$file_name= $link_arr[count($link_arr)-1]
;?>
<header id="header">
        <div class="container ">
            <div class="d-flex  flex-row ">
                    <div class="logo"><a href="../pages/index.p hp">
                            <img src="../images/logo.png" alt="no-image">
                        </a>
                    </div>
                    <div class="list d-flex justify-content-end">
                        <div class="nav"><a href="../pages/index.php" <?php if($file_name=="index.php"){echo "class='pageActive'";}?>>HOME</a></div>
                        <div class="nav"><a href="../pages/market.php" <?php if($file_name=="market.php"){echo "class='pageActive'";}?>>MARKET</a></div>
                        <div class="nav"><a href="../pages/aboutus.php" <?php if($file_name=="aboutus.php"){echo "class='pageActive'";}?>>ABOUT US</a></div>
                        <div class="nav"><a href="../pages/contactus.php" <?php if($file_name=="contactus.php"){echo "class='pageActive'";}?>>CONTACT US</a></div>
                        <div class="nav"><a href="../pages/signup.php" <?php if($file_name=="signup.php"){echo "class='pageActive'";}?>>SIGN UP</a></div>
                    </div>
            </div>
    </div>
    </header>