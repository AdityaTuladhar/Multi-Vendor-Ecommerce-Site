<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
<?php include '../templates/header.php' ?>
    <div style="height:70px;"></div>
    <div class="container">
        <div class="col-4"></div>
        <div class=" col-4 px-5 rounded mt-3 bg-light" style="box-shadow:  3px 7px 10px 7px rgba(197, 197, 197,0.7);;" >
            <form class="">
                <h2 class="mb-3 pt-3 text-center">Sign Up for Free</h2>
                <div class="form-group">
                    <div class=""><label for="username">Username</label>
                        <input type="text" name="name" placeholder="Name" class="form-control my-2">
                    </div>
                </div>
                <div class="form-group">
                    <div class=""><label for="address">Address</label>
                        <input type="text" name="address" placeholder="Address" class="form-control my-2">
                    </div>
                </div>
                <div class="form-group">
                    <div class=""><label for="number">Number</label>
                    <input type="text" name="number" placeholder="Phone number" pattern="[0-9]+" maxlength="10" class="form-control my-2"></div>
                </div>
                <div class="form-group">
                    <div class=""><label for="email"> Email</label>
                    <input type="email" name="email" placeholder="Email address " class="form-control my-2"></div>
                </div>
                <div class="form-group">
                    <div class=""><label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control my-2"></div>
                </div>
                <div class="form-group pb-3">
                <button class="btn btn-primary">Register</button><br>
                <a href="login.php" >Already a member?</a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-4"></div>

    <div style="height:70px;"></div>
    <?php include '../templates/footer.php' ?>
</body>
</html>