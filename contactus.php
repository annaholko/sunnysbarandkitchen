<?
if(isset($_POST['email'])) {
    /*var_dump($_POST);*/
    $name = $_POST ['name'];
    $subject = $_POST ['subject'];
    $from = $_POST ['email'];
    $message = $_POST ['message'];
    $phone = $_POST ['phone'];

    $mailTo ="info@sunnysbarandkitchen.com";
    $headers = "From: ".$from;
    $txt = "You have received an email from ".$name.".\n".$phone.".\n\n".$message;
    
    
    mail($mailTo,$subject,$txt, $headers);
    header("Location: contactus.php?mailsend");
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    
<title>Sunny's Bar&Kitchen | Contact Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name="description" content="Sunny's Bar and Kitchen | Restaurant | Bar | Function Hall">
<link rel="stylesheet" href="https://use.typekit.net/vrd1zla.css">
<link rel="stylesheet" href="https://use.typekit.net/xtq4nvj.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="shortcut icon" href="pics/favicon.ico" type="image/x-icon">
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
<link rel="stylesheet" href="font-awesome-5/web-fonts-with-css/css/fontawesome-all.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
    
    

    
<body> 
    <button onclick="topFunction()" id="but1"  title ="Go to top"><i class="fa fa-angle-up"></i></button>
<div class="zigzag">
<div class="hero">
    <div class="logo">
        <a href="index.html"><img src="pics/rerelogo.png" alt="Sunny's logo" ></a>
    </div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
        </div>
        <div id="bookatable"></div>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="offers.html">Offers</a></li>
            <li><a href="function.html">Function Room</a></li>
            <li><a href="aboutus.html">About Us</a></li>
           <li class="active"><a href="contactus.php">Contact Us</a></li>
        </ul>
        </div>
    </div>
</nav>
</div>
</div>
    
<div class="container">
    <div class="row">
        <div class="col-xs-12 text-center">
        <?php if(isset($_GET["mailsend"])): ?>
            <div id="mailsendheader">
                <h3 style="font-weight:200;
                           margin-bottom:1em;">Your enquiry was successfully sent<br>Thank you. </h3>
                <?php endif; ?></div>
        </div>
        <div class="col-md-6">
            <div class="well well-sm">
                
                
                
                <form id="contact" class="form-horizontal recaptchaForm" method="post">
                    <fieldset>
                        <div id="header">
                            <legend class="text-center header">Contact us</legend></div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="first_name" name="name" type="text" placeholder="Full Name" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="telephone" name="phone" type="text" placeholder="Phone number" class="form-control"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="comments" name="message" placeholder="Enter your enquiry here" rows="7" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-xs-center" pull-right>
                                <div class="g-recaptcha" data-sitekey="6Ld2CWkUAAAAAKHwCODX9rrBSFuowuVuwdAvkGje"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <div id="submit">
                                    <button type="submit" class="button"><span>Submit</span></button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <div class="panel-body text-center">
                        <div id="header">
                            <legend class="text-center header">Adress</legend></div>
                        <div id="adress">
                        Mattocks Rd,  Wellbank<br>
                        Dundee, DD5 3PJ <br>
                            <i class="fas fa-phone"></i> 01382 350922<br>
                        </div>
                        
                        <iframe id="map-container" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2200.826146684189!2d-2.862480248217062!3d56.52242163974336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48865e220f30fc95%3A0xedebb021d4929321!2sSunny&#39;s+Bar+%26+Kitchen!5e0!3m2!1sen!2suk!4v1530711132316">
                        </iframe>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="zigzagcontainer">
    <div class="container">
        <div id="zigzag"></div>
    </div>
</div>
    

    
<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="https://www.tripadvisor.co.uk/Restaurant_Review-g186518-d13366951-Reviews-Sunny_s_bar_kitchen-Dundee_Scotland.html" target="_blank">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div id="opening">
                    <h5>Opening Hours</h5>
                    <ul>
                        <p>Mon - Tue: Closed</p>
                        <p>Wed: 5pm - 11pm</p>
                        <p>Thur: 5pm - 11pm</p>
                        <p>Fri: 5pm - 12pm</p>
                        <p>Sat: 3pm - 1am</p>
                        <p>Sun: 3pm - 11pm</p>
                    </ul>
                </div>
                </div>
                <div class="col-sm-3">
                    
                    <h5> Follow us</h5>
                    <div class="social-networks">
                        <a href="https://www.facebook.com/sunnysbarandkitchen" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    
                </div>
                <div class="col-sm-3">
                    <h5>Contact Us</h5>
                    <ul>
                        <li>Leave a <a href="https://www.facebook.com/sunnysbarandkitchen/" target="_blank"><b>Facebook</b></a> message</li>
                        <li>Or phone: <br><a href="tel:01382 350922"><b>01382 350922</b></a></li>
                        
                    </ul>
                    <a href="contactus.html#bookatable"><button type="button" class="btn btn-default">Book a Table</button></a>
                </div>
            </div>
        </div>
    <iframe id="map-container" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2200.826146684189!2d-2.862480248217062!3d56.52242163974336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48865e220f30fc95%3A0xedebb021d4929321!2sSunny&#39;s+Bar+%26+Kitchen!5e0!3m2!1sen!2suk!4v1530711132316">
    </iframe>
    
    <div class="footer-copyright">
        <p><a href="#" data-toggle="modal" data-target="#developer">&copy; 2018 Anna Viatkina </a></p>
    </div>
</footer>
    
    <div class="modal fade" id="developer" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>To contact the website developer:</h3>
            <div class="modal-body">
                <p>E-mail: anna.viatkina@gmail.com</p>
            </div><!--end modal body-->
                <div class="modal-footer">
                    <a class="btn btn-warning" data-dismiss="modal">Close</a>
                </div><!--end modal footer-->
            </div><!--end modal header-->
        </div><!--end modal-content-->
    </div><!--end modal dialog-->
</div><!--end modal fade-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/click.js"></script>
<script src="js/indexmodal.js"></script>
<script src="js/carousel.js"></script>

<script>
/*$(document).ready(function(){
    $(".recaptchaForm").submit(function(event){  
        var recaptcha = $("#g-recaptcha-response").val();
        if(recaptcha === ""){
            event.preventDefault();
            alert("Please check reCaptcha");
        }
            event.preventDefault();
                $.post("submit.php",
                       
                    "secret":"6Ld2CWkUAAAAAB27xzK3o4eyuylkMdgxMOU027zZ",
                    "response":recaptcha,        
                    "email": $("input[name=email]").val(),
                    
                    }
                       
                    ,function(prdel){
                    console.log(prdel.message); $('#contact').prepend($('<div class="message">').text("hello"))
                    });
    });
});*/
    
</script>    
    

</body>
</html>