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

   <?php include 'header.php'?>
 

    <!-- Banner -->
    <div class="banner ">
        <div id="img"  class="banner-image">
            <img src="images/research2.svg">
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

    <!-- Index Content -->
    <!-- <div id="down"></div> -->
    <div class="index" id="down">
        <div class=" container title" >
            View More
        </div>
        <div class="index-content container ">
            <div class="item flex-column " >
                <img src="images/easyreturn.png" alt="blog">
                 <h5>Easy Return</h5>
            </div>
            <div class="item flex-column" >
                <img src="images/f&f.png" alt="cv">
                <h5>Free & Fast shipping</h5>
            </div>
            
            <div class="item flex-column"  >
                <img src="images/sg.png" alt="">
                <h5>Satisfaction Gurantee</h5>
            </div>
            <div class="item flex-column"  >
                <img src="images/money.png" alt="">
                <h5>Money back Gurantee</h5>
            </div>
        </div>
    </div>
    <!-- End of Index Content -->

    <!-- Footer -->
    <!-- Use of flex to style the footer-item -->
   <?php include'footer.php'; ?>
    <!-- End of footer -->
    <!-- INnernal Javascript -->
    <!-- <script>
        // Creating array to store images
        var images = ['images/easyreturn.png', 'images/f&f.png', 'images/sg.png', 'images/money.png'];
            //    Declaration and initialization of varaible x
        var x = 0;
        //  To get the element rederenced with 'img' id. 
        var imgs = document.getElementById('img');
    
        //  slider function is called every 5 seconds  
        setInterval(slider, 5000);

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
   </script> -->
   <!-- End of Internal Javascript -->

    <!-- External JavaScript -->
    <script src="js/custom.js"></script>
</body>
</html>