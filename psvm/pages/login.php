<title>Invoice System</title>
<style>
    body,
    #head {
        font-family: 'Montserrat', sans-serif;
    }
</style>
<script src="js/invoice.js"></script>
<link href="css/signin_login.css" rel="stylesheet">
<?php include('inc/container.php'); ?>
<!-- Nav Bar -->
<nav class="navbar navbar-light  navbar-dark" style="background-color: #23b7e5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" title="Invoice Software Company">
            <img src="images/logo.png" alt="Brand" width="150" height="30" class="d-inline-block align-text-top" style="margin-left: -30px; margin-right: -25px">
            InveWare
        </a>
    </div>
</nav>

<!-- login content -->
<div class="container w-75 my-3 shadow p-3 mb-5 mt-4 bg-white rounded">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <figure>
                <img src="images/login.jpg" class="img-fluid" alt="sing up image" />
            </figure>
            <a href="sign_in.php" class="signup-image-link text-center" id="Login">
                Create an account
            </a>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text-center my-5">
            <h3 id="head">Sign Up</h3>

            <form method="POST" class="register-form p-5" id="register-form">

                <div class="form-group p-3">
                    <div class="form-group">
                        <label for="email">
                            <i class="fa-solid fa-envelope"></i>
                        </label>
                    </div>
                    <div class="form-group c">
                        <input class="form-control" type="email" name="email" id="email" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Your Email" autoComplete="off" style=" width: 300px;" required />
                    </div>
                </div>
                <div class="form-group p-3">
                    <div class="form-group">
                        <label for="password">
                            <i class="fa-solid fa-lock"></i>
                        </label>
                    </div>
                    <div class="form-group c">
                        <input class="form-control" type="password" name="password" id="password" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Password" autoComplete="off" style=" width: 300px;" required />
                    </div>
                </div>

                <div class="form-group form-button p-3">

                    <button type="submit" name="login" id="login" class="btn btn-info" style="width:100%;">Sign Up</button>

                </div>

            </form>

        </div>
    </div>
</div>
</div>