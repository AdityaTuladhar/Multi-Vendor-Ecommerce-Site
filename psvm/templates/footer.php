<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<style>
    /* Footer */
.footer {
	background-color: #333;
}
.row-footer {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	grid-gap: 25px;
	text-align: justify;
	padding: 25px;
	margin: 0 20px;
	color: #fff;
}
.lower-footer {
	/* padding: 0; */
	background-color: rgb(41, 41, 41);
	color: #fff;
}
.footer-details {
	justify-content: space-between;
}
.footer-details > div {
	font-size: 14px;
}
.footer-title {
	cursor: pointer;
	font-size: 18px;
	padding: 10px 0;
}
.footer-text {
	cursor: pointer;
	font-size: 15px;
	margin: 3px 0;
}
.footer-item .footer-text a {
	text-decoration: none;
	color: #fff;
}
/* hover effect for elements of footer */
.footer-item .footer-title:hover,
.footer-item .footer-text:hover,
.footer-item a:hover {
	color: #0D6EFD;
}
.social a {
	height: 30px;
	width: 30px;
	background: #717171;
	color: #fff;
	border-radius: 100px;
	display: inline-block;
	margin-right: 10px;
	text-align: center;
	line-height: 30px;
}
.social a:hover {
	background-color: #0D6EFD;
	color: #fff;
}
.newsletter .input-group input {
	width: 200px;
	height: 20px;
	padding: 5px 15px;
	border: none;
	font-size: 14px;
	border-radius: 4px 0 0 4px;
	outline: none;
}
.newsletter .input-group button {
	width: 100px;
	height: 30px;
	padding: 5px 15px;
	border: none;
	font-size: 14px;
	border-radius: 0 4px 4px 0;
}
</style>
<Footer class="footer">
        <div class="container-fluid px-0" >
            <div class="row row-footer upper-footer ">
                <div class="footer-item " style=" display:flex ; flex-direction:column;">
                    <div class="footer-title">Contact Details</div>
                    <div class="footer-text"><i class="fas fa-envelope"></i> Email</div>
                    <div class="footer-text">sasdasu@gmail.com</div>
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
            </div>
            <div class="lower-footer">
                <div class=" footer-details mini-container  flex-row justify-content-center"  >
                    <div> &copy; Copyright Cooperation &trade;2020. All rights Reserved. </div>
            </div>
            
        </div>
    </Footer>