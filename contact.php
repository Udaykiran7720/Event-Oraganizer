<!DOCTYPE html>
<html>
   <head>
       <title>Contact us</title>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="stylesheet" type="text/css" href="styles.css">
       <meta name="viewport" content="width =device-width, initial-scale=1">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Macondo&display=swap" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
   
    </head>
    <body>
        <section class="footer" id="footer">
            <div class="title-text">
                <p>Contact Us</p>
                <h1>Get in touch for more details</h1>
            </div>
            <div class="hero">
                <form action="contactdb.php" method="post">
                    <div class="row">
                        <div class="inputbox">
                            <input type="text" placeholder="Enter name" id="contact-name" name="fullname" onkeyup="validateName()">
                            <label for="name"><i class="fa fa-user-circle-o"></i> Your name</label> 
                            <span id="name-error"></span>                      
                        </div>
                        <div class="inputbox">
                            <input type="text" placeholder="Enter phone no" id="contact-phone" name="phoneno" onkeyup="validatePhone()">
                            <label for="number"><i class="fa fa-phone"></i> Phone no.</label>
                            <span id="phone-error"></span>
                        </div>
                    </div>
                    
                    <div class="inputbox">
                        <input type="email" placeholder="Enter email-id" id="contact-email" name="emailid" onkeyup="validateEmail()">
                        <label for="email"><i class="fa fa-envelope-o"></i> Email ID</label>
                        <span id="email-error"></span>
                    </div>
                    <div class="inputbox">
                        <textarea placeholder="Enter your message" id="contact-message" name="message" onkeyup="validateMessage()" cols="30" rows="5" required></textarea>
                        <label for="message"><i class="fa fa-comments-o"></i> Your message</label>
                        <span id="message-error"></span>
                    </div>
                    
                    <button type="submit" onclick="return validateForm()"><span></span><i class="fa fa-paper-plane-o"></i> Submit</button>
                    <span id="submit-error"></span>
                    
                </form>
            </div>
            
            <div class="home">
                <a href="mainpage.php"><span></span>Home</a>
            </div>
            <br></br>
            <div class="footer-row">                
                <div class="footer-left">
                    <h1>Opening Hours</h1>
                    <p><i class="fa fa-clock-o"></i> Monday to Friday - 10am to 5pm</p>
                    <p><i class="fa fa-clock-o"></i> Saturday and Sunday - Holiday</p>
                </div>
                <div class="footer-right">
                    <h1>Get in touch</h1>
                    <p>New horizon college          </p>
                    <p> Bangalore, IN <i class="fa fa-map-marker"></i></p>
                    <p>yourstory@gmail.com <i class="fa fa-paper-plane-o"></i></p>
                    <p>+91 8073740751 <i class="fa fa-phone"></i></p>
                </div>
            </div>          
            <div class="social-link">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <h4>Made by uday & Vaishnavi</h4>
            </div>
        </section>
        <script src="script.js"></script>
        
    </body>
</html>