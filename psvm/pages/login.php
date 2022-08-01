<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<style>

</style>
<body>
<?php include '../templates/header.php' ?>
    <div style="height:70px;"></div>
    <div class="container">
        <div class="row bg-img">
            <div class="col-4"></div>
            <div class=" col-4 px-5 rounded mt-5 bg-light pb-5" style="box-shadow:  3px 7px 10px 7px rgba(197, 197, 197,0.7);;" >
                <form class="">
                    <h2 class="mb-5 mt-2 pt-3 text-center">Login</h2>
                    <div class="form-group">
                        <div class=""><label for="username">Username</label>
                            <input type="text" name="name" placeholder="Name" class="form-control my-2">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <div class=""><label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control my-2"></div>
                    </div>
                    <div class="form-group pb-3">
                    <button class="btn btn-primary mt-3">Login</button><br>
                    <a href="login.php" >Register now</a>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <!-- <img src="../images/pressplay.svg" alt=""> -->
            </div>
        </div>
    </div>
    
    <div style="height:70px;"></div>
    <!-- <?php include '../templates/footer.php' ?> -->
</body>
</html>