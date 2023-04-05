<!DOCTYPE html>
<html>
   <head>
       <title>Online Events Booking</title>
       <link rel="stylesheet" type="text/css" href="styles.css">
       <meta name="viewport" content="width =device-width, initial-scale=1">
       <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Macondo&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

       <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    </head>
   <body>
    <section id="booking">
        <div class="title-text">
            <p>Your Story</p>
            <h1>Book Now</h1>
        </div>
        
        <div class="hero1">
            <form action="bookingdb.php" method="post">
                <div class="row">
                    <div class="inputbox">
                        <input type="text" placeholder="Enter name" id="bookername" name="booker_name" onkeyup="validateName()" required>
                        <label for="name"><i class="fa fa-user-circle-o"></i> Your name</label> 
                        <span id="name-error"></span>                      
                    </div>
                    <div class="inputbox">
                        <input type="text" placeholder="Enter phone no" id="phoneno" name="phone_no" onkeyup="validatePhone()" required>
                        <label for="number"><i class="fa fa-phone"></i> Phone no.</label>
                        <span id="phone-error"></span>
                    </div>
                </div>
                
                <div class="inputbox">
                    <input type="text" placeholder="Enter address" id="bookeraddress" name="booker_address" onkeyup="validateAddress()" required>
                    <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                    <span id="address-error"></span>
                </div>
                
                <div class="row">
                    <div class="inputbox">
                    <div class="selectop">
                            <select id="eventname" name="event_name" required>
                                <option></option>
                                <option value="Indian Style Wedding">Indian Style Wedding</option>
                                <option value="Western Style Wedding">Western Style Wedding</option>
                                <option value="Birthday Decoration">Birthday Decoration</option>
                                <option value="MICE">MICE</option>
                                <option value="Party DJ Nights">Party DJ Nights</option>
                                <option value="in-House Party">in-House Party</option>
                            </select>
                        </div>
                        <label for="name"><i class="fa fa-handshake-o"></i> Event name</label> 
                        <span id="eventname-error"></span>                      
                    </div>
                    <div class="inputbox">
                        <input type="text" placeholder="Enter event location" id="eventlocation" name="event_location" onkeyup="validateLoc()" required>
                        <label for="location"><i class="fa fa-map-marker"></i> Event location</label>
                        <span id="location-error"></span>
                    </div>
                </div>

                <div class="inputbox">
                    <input type="email" placeholder="Enter email-id" id="email_id" name="email_id" onkeyup="validateEmail()" required>
                    <label for="email"><i class="fa fa-envelope-o"></i> Email ID</label>
                    <span id="email-error"></span>
                </div>

                <div class="row">
                    <div class="inputbox">
                        <input type="date" placeholder="Enter event date" id="event_date" name="event_date" onkeyup="validateDate()" required>
                        <label for="date"><i class="fa fa-calendar"></i> Your event date</label> 
                        <span id="date-error"></span>                      
                    </div>
                    <div class="inputbox">
                        <input type="text" placeholder="Enter number of guest" id="no_of_guest" name="no_of_guest" onkeyup="validateguest()" required>
                        <label for="number"><i class="fa fa-list-ul"></i> No. of guest</label>
                        <span id="guest-error"></span>
                    </div>
                </div>

                <div class="inputbox">
                    <textarea placeholder="Enter your message" id="event_description" name="event_description" onkeyup="validateMessage()" cols="30" rows="5" required></textarea>
                    <label for="message"><i class="fa fa-comments-o"></i> Your message</label>
                    <span id="message-error"></span>
                </div>
                <button type="submit" onclick="return validateForm()"><span></span><i class="fa fa-paper-plane-o"></i> Submit</button>
                <span id="submit-error"></span>
                
            </form>
        </div>
        
        <div class="contact">
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
    <script src="booking.js"></script>
   </body>
</html>