<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../dashboard/images/sm.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Just Basic HTML" />
    <meta name="Author" content=" Srijeet" />
    <meta name="keywords" content="HTML CSS JAVASCRIPT" />
    <title>About us</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/banner.css">

    <style>
        /* css for cv page */
        .banner-content {
            width: 300px;
            text-align: justify;
            ;
            font-family: 'light';
            font-size: 18px;
            padding: 15px;
            right: 120px;
        }

        .button {
            position: absolute;
            top: 500px;
            right: 180px;
        }

        .blog .mini-container>div {
            padding: 10px;
            margin: 25px;
            font-family: 'regular';
            font-size: 20px;
            line-height: 140%;
        }

        .text {
            padding: 10px;
            margin: 10px;
            font-family: 'regular';
            font-size: 20px;
            line-height: 140%;
        }


        .title img {
            margin-top: 30px;
            ;
            width: 400px;
            ;
        }

        #skills img {

            width: 300px;
        }

        .text {

            border-radius: 5px;
            ;
        }

        .tab-content {
            margin-top: 60px;
        }

        .cont {
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
            width: 180px;
            border: 1px solid #eee;
            margin-bottom: 10px;
            overflow: hidden;
            letter-spacing: 0;
            background-color: #009866;
            color: #fff;
        }

        .cont:hover {
            background-color: #00724c;
            border: 1px solid #009866;
            color: #fff;

        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include '../templates/header.php' ?>
    <!-- End of Navbar -->
    <!-- Banner -->
    <div class="container">

        <div class="banner row mb-5">
            <div class="banner-image col-6">
                <img src="../images/cv.svg" alt="banner image">
            </div>
            <div class="col-2"></div>
            <div class="banner-content col-4">
                <div style="font-size: 15px;">About us
                    Four college students were given an opportunity in their Web Programming class to build a website. The four of us came together and decided to build a website which was not only creative and unique but also a website which could help people make their daily life a little easier and simpler.
                    We saw first how people in rural areas were short of receiving services which they urgently required such as plumbing problems, a broken door which could be solved by a carpenter and many more services but have no clue where the nearest service is located. With our website we wanted to change that and help those in need of these service achieve a simpler way. of life.
                </div>
            </div>
        </div>
    </div>
    <!-- End of banner -->

    <div id="internal" style="height:100px;"></div>





    <!-- End of toggle -->
    <!-- Footer -->
    <?php include '../templates/footer.php' ?>
    <!-- End of footer -->
    <!-- External JS -->
    <script src="../js/custom.js"></script>
</body>

</html>