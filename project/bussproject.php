<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket booking</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
/* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
}

header {
    background-color: #333;
    color: rgb(189, 6, 6);
    padding: 10px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.logo img {
    height: 100px;
}

nav .link a {
    color: rgb(28, 14, 231);
    text-decoration: none;
    padding: 10px;
    margin: 0 5px;
    font-weight:;
    font-style:;
    text-transform: uppercase;
}

nav .link a:hover {
    text-decoration: underline;
}

nav .buttons button {
    margin: 0 5px;
    padding: 10px 20px;
    background-color: #f90;
    border: none;
    color: white;
    cursor: pointer;
}

nav .buttons button:hover {
    background-color: #e80;
}
/* Styling for the header and navigation */
header {
    background-color: #20f411;
    padding: 10px 0;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    font-size: 1.2em;
}

/* Existing CSS styles */
/* Include your existing styles here */

/* Styling for the about-us content */
.about-us {
    display: none;
    text-align: center;
    margin-top: 20px;
}

.about-us.show {
    display: block;
}

/* About Us section */
.about, .about-us {
    padding: 20px;
    text-align: center;
}

.about h1 {
    font-size: 2em;
    margin: 0;
}

.about-us p {
    max-width: 800px;
    margin: 20px auto;
    font-size: 1.1em;
    line-height: 1.6em;
}

/* Facilities section */
.fac {
    display: inline-block;
    width: 200px;
    margin: 20px;
    vertical-align: top;
    text-align: center;
}

.fac img {
    width: 128px;
    height: 80px;
    object-fit: cover;
}

.fac h2 {
    font-size: 1.2em;
    margin: 10px 0;
}

.fac p {
    font-size: 1em;
}

/* Social Media section */
.social-media {
    margin-top: 20px;
}

.social-media a {
    margin: 0 10px;
}

.social-media img {
    width: 40px;
    height: 40px;
    vertical-align: middle;
    border-radius: 50%; /* Makes the icons circular */
    transition: transform 0.3s ease; /* Adds a smooth hover effect */
}

.social-media img:hover {
    transform: scale(1.2); /* Enlarges the icon on hover */
}
/*home section*/ 
section home{
    background-image: url(buscar.jpeg);
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 600px;
}

.close {
  color: #30ed1f;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
/*container*/
.container {
    text-align: center;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%; /* Adjust width as needed */
    max-width: 600px; /* Example maximum width */
    margin: 0 auto; /* Center horizontally */
    margin-top: 20px; /* Example top margin */
}

.container .header {
    font-size: 24px;
    font-weight: bold;
    color: #1f26e4; /* Blue color */
    margin-bottom: 20px;
}

.container label {
    display: block;
    margin-bottom: 5px;
    color: #333; /* Dark gray color */
}

.container input[type="text"],
.container input[type="date"],
.container select {
    width: calc(100% - 22px);
    padding: 10px;
    margin: 0 auto;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; /* Ensure padding doesn't affect width */
}

.container input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50; /* Green color */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.container input[type="submit"]:hover {
    background-color: #45a049; /* Darker green color on hover */
}

.about-us {
    display: none;
    text-align: center;
    margin-top: 20px;
}

.about-us.show {
    display: block;
}
        /*popular bus ticket*/
.tickets {
    width: 200px;
    height: auto;
    margin: 5px;
    text-align: center;
}
.tickets {
    display: flex;
    justify-content: center; /* Align items horizontally in the center */
    /* Other container styles */
    
}
.ticket {
    display: flex;
    flex-wrap: wrap; /* Wrap items onto multiple lines */
    justify-content: center; /* Align items horizontally in the center */
    /* Other container styles */
}

.ticket {
    /* Individual item styles */
    margin: 10px; /* Example margin between items */
}

.tickets h2 {
    color: #1f26e4;
    position: fixed;
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center items horizontally */
    text-align: center; /* Center text horizontally */
    /* Other container styles */
}

.ticket h2 {
    font-size: 1.2em;
    margin: 10px 0;
}

.ticket p {
    font-size: 1em;
}
 /*contact us*/
 .contact-form {
    max-width: 400px; /* Adjust width to control overall size */
    margin: 20px auto;
    background-color: #f9f9f9; /* Light background color */
    padding: 20px; /* Increase padding for better spacing */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /* Centering styles */
    display: flex;
    flex-direction: column;
    align-items: center;
}

.contact-form h1 {
    font-size: 24px;
    color: #333; /* Dark text color */
    margin-bottom: 15px; /* Increase spacing below heading */
}

.contact-form label {
    font-size: 14px; /* Adjust label font size */
    color: #555; /* Slightly darker text color */
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px; /* Increase spacing between input fields */
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px; /* Adjust input and textarea font size */
}

.contact-form textarea {
    resize: vertical; /* Allow vertical resizing of textarea */
    height: 10px; /* Increase textarea height for more content */
}

.contact-form button {
    width: 100%;
    padding: 12px; /* Increase padding for larger button */
    background-color: #007BFF; /* Blue button color */
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px; /* Larger button font size */
}

.contact-form button:hover {
    background-color: #0056b3; /* Darker blue color on hover */
}




/*footer*/
body footer{
    background-color: rgb(26, 214, 82);
    
}

 
    </style>
    
</head>
<body>
    
    <header>
        <nav>
            <div class="logo">
                 <img src="bus log.png" alt="log image" width="150",length="60">
                 
            </div>
            <div class="navigation">
             <nav>
                <Ul>
                     <u><i><b> <a href="#home">HOME</a></b></i></u>
                     <u><i><b><a href="about.html">ABOUT US</a></b></i></u>
                     <u><i> <b><a href="service.html">SERVICES</a></b></i></u>
                     <u><i> <b><a href="contact.php">CONTACT</a></b></i></u>
                     <u><b><I><b><a href="login.php" class="btn-login">LOGIN/SIGN UP</a></b></I></u>
                </Ul>
             </nav>
            </div>
    </header>
    <br>
    <br>
    <br>
    <main>
        <section id="HOME">
            <center>
                <nav>
                    <div class="container">
                        <div class="header">RESERVE >> PURCHASE >> ADVENTURE</div>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="from">From</label>
                                <select id="from" name="from">
                                    <option value="">Select departure location</option>
                                    <option value="kisumu">KISUMU</option>
                                    <option value="mombasa">MOMBASA</option>
                                    <option value="nairobi">NAIROBI</option>
                                    <option value="kisii">KISII</option>
                                    <option value="embu">EMBU</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="to">To</label>
                               
                                <select id="to" name="to">
                                    <option value="">Select destination</option>
                                    <option value="#kisumu">kisumu</option>
                                    <option value="kisii">kisii</option>
                                    <option value="embu">embu</option>
                                    <option value="mombasa">mombasa</option>
                                    <option value="nairobi">nairobi</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Search">
                            </div>
                        </form>
                    </div>
                </nav>
            </center>
        </section>
    </main>
<br>
<br>
<br>
<br>
<center>
        
        <div class="tickets">
            <h2>Popular Bus Ticket</h2>
            <div class="ticket">
                <img src="kanairo.jpg" alt="kanairo freshi tu" style="width:128px;height:80px;">
                <p>Nairobi Express</p>
                <p>KES 1000</p>
            </div>
            <div class="ticket">
                <img src="arusha.jpg" alt="Arusha Salaam Aleikum" style="width:128px;height:80px;">
                <p>Arusha Salaam Aleikum</p>
                <p>KES 1000</p>
            </div>
            <div class="ticket">
                <img src="mombasa.jpg" alt="Mombasa Tutafika" style="width:128px;height:80px;">
                <p>Mombasa Tutafika</p>
                <p>KES 1000</p>
            </div>
            <div class="ticket">
                <img src="kampala.jpg" alt="Vuka Boarder" style="width:128px;height:80px;">
                <p>Kampala-Vuka boarder</p>
                <p>KES 1000</p>
            </div>
            <br>
            <div class="ticket">
                <img src="kisumu.jpg" alt="Kisumu Dala" style="width:128px;height:80px;">
                <p>Kisumu Dala</p>
                <p>KES 1000</p>
            </div>
            <div class="ticket">
                <img src="dar.jpg" alt="Dar-es-salaam Mpo" style="width:128px;height:80px;">
                <p>Dar-es-salaam Mpo</p>
                <p>KES 1000</p>
            </div>
            <div class="ticket">
                <img src="juba.jpg" alt="Twaingia Juba" style="width:128px;height:80px;">
                <p>Twaingia Juba</p>
                <p>KES 1000</p>
            </div>
            <div class="ticket">
                <img src="addis ababa.jpg" alt="Addis ababa hoyee" style="width:128px;height:80px;">
                <p>Addis ababa hoyee</p>
                <p>KES 1000</p>
        </div>
</center>

<div class="social-media">
    <a href="https://www.facebook.com/profile.php?id=100090712794819&mibextid=ZbWKwL" target="_blank">
        <img src="fb logo.png" alt="Facebook">
    </a>
    <a href="https://www.twitter.com/yourprofile" target="_blank">
        <img src="x logo.png" alt="Twitter">
    </a>
    <a href="https://www.instagram.com/joyc.ewanja?utm_source=qr&igsh=NHpycWQ4bnBlczNj" target="_blank">
        <img src="ig logo.jpeg" alt="Instagram">
    </a>
    <a href="https://www.linkedin.com/in/jerry-ouma-6045282b7?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
        <img src="linkedin.png" alt="LinkedIn">
    </a>
    <a href="https://youtube.com/@djniceofficial254.?si=VEzbgSxbOZNj3U1_" target="_blank">
        <img src="youtube logo.png" alt="YouTube">
    </a>
</div>
</main>

</body>
</html>