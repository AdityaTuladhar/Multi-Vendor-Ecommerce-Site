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
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

   <?php include '../templates/header.php'; ?>
 

    <!-- Banner -->
    <div class="banner ">
        <div id="img"  class="banner-image">
            <img src="../images/research2.svg">
        </div>
        <div class="banner-content flex-column">
            <div class="hero-text" style="text-transform: uppercase;">
                 E-commerece<br/> Website
            </div>
            
            <div class="button" style="margin-top: 20px;;">
              <a href="#down"><button type="submit" class="btn btn-default btn-large" style="letter-spacing: 20;"> Scroll down</button></a>  
            </div>
        </div>
    </div>

    <!-- End of Banner -->

    
    <div class="index" id="down">
        <div class=" container title" >
            View More
        </div>
        <div class="index-content container ">
            <div class="item flex-column " >
                <img src="../images/easyreturn.png" alt="blog">
                 <h5>Easy Return</h5>
            </div>
            <div class="item flex-column" >
                <img src="../images/f&f.png" alt="cv">
                <h5>Free & Fast shipping</h5>
            </div>
            
            <div class="item flex-column"  >
                <img src="../images/sg.png" alt="">
                <h5>Satisfaction Gurantee</h5>
            </div>
            <div class="item flex-column"  >
                <img src="../images/money.png" alt="">
                <h5>Money back Gurantee</h5>
            </div>
        </div>
    </div>
  
   <?php include'../templates/footer.php'; ?>
  
    <script src="js/custom.js"></script>
</body>
</html>