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
    <title>Contact</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Css Styles for form */
           .form-container a{
        text-decoration:none;
        color:#999;
        text-align:right;
        display: block;
        transition: .3s;
        font-size:15px;
    }
    .form-container a:hover{
        color:#009866;
    }
    /* Button for form */
    .butn{
        display: block;
        width:100%;
        height:50px;
        border-radius: 50px;
        font-family:'medium';
        margin:16px 0;
        padding:10px;
        background-image: linear-gradient(to right, #009866, #0ee09e, #009866);
        background-size: 200%;
        color:#fff;
        text-transform:uppercase;
        font-size:20px;
        cursor: pointer;
        transition: .5s;
        border:none;
        outline:none;
    }
    .butn:hover{
        background-position: right;
    }
    /* ***Button for forms*** */
   
    textarea{
        resize:none;
        overflow: hidden;
    }
    .form-container {
        margin: 75px;
        display: grid;
        position: relative;
        grid-template-columns: repeat(2, 1fr);
        padding: 2rem 0;
        grid-gap: 7rem;
    }
    .img {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    .cover {
        width: 500px;
    }
    .login-container {
        display: flex;
        align-items: center;
        text-align: center;
    }
    .form {
        width: 360px;
    }
    
    h2 {
        font-size: 2.9rem;
        margin: 15px 0;
        text-transform: uppercase;
        color: #333;
    }
    .input-div {
        position: relative;
        display: grid;
        grid-template-columns: 7% 93%;
        padding: 5px 0;
        margin: 25px 0;
        border-bottom: 2px solid #d9d9d9;
    }
   
   
  
    .i {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .i i {
        color: #009688;
        transition: .3s;
    }
    .input-div > div {
        position: relative;
        height: 45px;
    }
    
    .input-div.one {
        margin-top: -4px;
    }
    .input-div.two {
        margin-bottom: 4px;
    }
    .input-div > div h5 {
        position: absolute;
        font-size: 18px;
        left: 10px;
        top: -5px%;
        transform: translateY(-50%);
        transition: .3s;
        color: #999;
        font-family: 'medium';
    }
    .input {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        border: none;
        outline: none;
        background: none;
        padding: .5rem .7rem;
        font-size: 1.2rem;
        font-family: 'medium';
    }
    .three{
        height:100px;
        padding-bottom:40px;
    }
    /* Errors in forms */
    .error{
               position: absolute;
               
               font-size: 12px;
               font-family: 'medium';
               color:#009866;
           }
           #uerror{
               display:none;
               top:182px;
               right:73px;
           }
           #perror{
               display: none;
               top:267px;
               right:73px;
           }
           #terror{
               display:none;
               top:340px;
               right:28px;
           }
           /* Css for forms */


</style>
</head>
<body style="background-image: linear-gradient( rgba(255,0,0,0), #eee);">
    <!-- Navbar -->
    <Nav id="header">
        <div class="container flex-row navbar">
            <div  id="navigation" class="nav-section flex-row">
                <div class="nav" ><a href="../index.php">HOME</a></div>
                <div class="nav"><a href="services.php">SERVICES</a></div>
                <div class="nav"><a href="aboutus.php">ABOUT US</a></div>
                <div class="nav active"><a href="contactus.php">CONTACT US</a></div>
                <div class="nav"><a href="signin.html">SIGN IN</a></div>
            </div>
        </div>
    </Nav>
    <!-- End of Navbar -->

    <!--Main content  -->
    <form class="form-container"  name="contactForm" method="post" action="../php/insertContact.php" onsubmit=" return validateForm()">
        <div class="img">
            <img src="../images/contact.svg" alt="" class="cover">
        </div>
        <div class="login-container">
            <div class="form">
                <img src="images/book.png" alt="" class="avatar">
                <h2> Complaints?</h2> 
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Name</h5>
                        <input type="text" class="input" id="name" name="contact_name" onkeyup="checkInput(this.id)"  >
                    </div>
                    
                </div>
                <span class="error" id="uerror">Enter your name</span>
                <div class="input-div two ">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input type="email" class="input" id="email" name="contact_email" onkeyup="checkInput(this.id)" >
                        
                    </div>
                </div>
                <span class="error" id="perror">Enter your email</span>
                <div class="input-div three">
                    <div class="i">
                        <i class="fas fa-info"></i>
                    </div>
                    <div>
                        <h5>Your Thoughts</h5>
                        <textarea name="contact_message" id="thoughts"  style="height: 100px;"
                        class="input" name="thoughts" onkeyup=" checkInput(this.id)" ></textarea>
                        
                    </div>
                </div>
                <span class="error" id="terror">What are your thoughts</span>
                <input type="submit" class="butn" value="Submit">
            </div>
        </div>
    </form>
    <!-- End of main content -->

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


    <!--  Internal  JavaScript -->
    <script>
        // JS for styling of contact page

        // returns all elements in the document that matches input CSS selector(s)
        const input = document.querySelectorAll('.input');

        // Declaration of function focusFunc
        function focusFunc() {
            // Refers to the parent of parent of input class
            let parent = this.parentNode.parentNode;
            // add focus as class to the parent 
            parent.classList.add('focus');
        }

        // Declaration of function blurFunc()
        function blurFunc() {
            // Refers to the parent of parent of input class
            let parent = this.parentNode.parentNode;
            //Checks if the input field is blank
            if (this.value == '') {
                // Removes focus class from parent
                parent.classList.remove('focus');
            }
        }

        // Executes every time input is clicked
        input.forEach((input) => {
            // 
            input.addEventListener('focus', focusFunc);
            input.addEventListener('blur', blurFunc);
        });

        //  End of JS styiling of contact page
        // 
    
        // Form Validation
        // stores the value of uerror in err
        var err = document.getElementById('uerror'),
            perr = document.getElementById('perror'),
            terr = document.getElementById('terror');
            // Declaration of validateForm() function
        function validateForm() {
            // Extracting value of form with name as name, email and thoughts
            var fname = document.forms['contactForm']['name'].value;
            var email = document.forms['contactForm']['email'].value;
            var thoughts = document.forms['contactForm']['thoughts'].value;

            if (fname == '' || email == '' || thoughts == '') {
                // Displayed if either one of the field is empty
                alert("Please fill the form");
                if (fname == '') {
                    // if fname is blank, the value is err is set to block which was none before
                    err.style.display = 'block';
                }
                if (email == '') {
                    // if email is blank, the value is perr is set to block which was none before
                    perr.style.display = 'block';
                }
                if (thoughts == '') {
                    // if thoughts is blank, the value is thoughts is set to block which was none before
                    terr.style.display = 'block';
                }
                // The form is not submitted
                return false;
            } else {
                // Displayed in alert box if all the fields are filled
                alert('Thanks for your response');
            }
        }
        // Declaration of checkInput(id) function
        // Called at the time when a user presses a letter
        function checkInput(id) {
            if (id == 'name') {
                // if name id is passed as paramenter then the display property of err is set to none
                err.style.display = 'none';
            } else if (id == 'email') {
                // if email id is passed as paramenter then the display property of err is set to none
                perr.style.display = 'none';
            } else if ((thoughts = 'thoughts')) {
                // if thoughts id is passed as paramenter then the display property of err is set to none
                terr.style.display = 'none';
            }
        }
    </script>
    <!-- End of Internal Javascript -->

    <!-- External JavaScript -->
    <script src="../js/custom.js"></script>
</body>
</html>