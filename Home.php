<!DOCTYPE html>
<head>
<style>
    

    .container 
    {
        width:100%;
        margin: 0%;
        padding: 0%;
        height: 5vw;
        overflow: hidden;
        z-index: 1;
        background-color:black;
        box-sizing: border-box;
    }

    .container a
    {
        font-size: 1.9vw;
        float: right;
        display: block;
        color: white;
        font-family:"Agency FB";
        text-align: center;
        padding: 1vw 2vw;
        text-decoration: none;
        cursor: pointer;
    }

    .container a:hover
    {
        color:rgb(252, 115, 35);
    }

    .p1
    {
        font-size: 1.5vw;
        float: left;
        display: block;
        color: white;
        font-family:"Agency FB";
        text-align: center;
        padding: 0.3vw 1vw;
        text-decoration: none;
    }

    .navbar
    {
        width: 100%;
        height: 8vw;
        overflow: hidden;
        background-color: whitesmoke;
    }

    .navbar a
    {
        position:sticky;
        font-size: 2vw;
        float: right;
        display: block;
        color: #6C717A;
        font-family:"Agency FB";
        text-align: center;
        padding: 2.7vw 2vw;
        text-decoration: none;
    }

    .navbar a:hover
    {
        color:rgb(245, 185, 73);
    }

    .navbar .a1
    {
        float: left;
        display: block;
    }

    .navimage
    {
        position:absolute;
        text-align: left;
        width:19vw; 
        height:8vw;
    }

    .slideshow-container 
    {
        width: 100%;
        height: 40vw;
        position: relative;
        margin: auto;
    }

    .slideshow-container .header
    {
        position:absolute;
        text-align:center;
        z-index: 1;
        font-size: 5vw;
        font-family:"Forte";
        top: 5vw;
        color: whitesmoke;
        left: 5%;
    }

    .slideshow-container .header1
    {
        position:absolute;
        text-align:center;
        z-index: 1;
        font-size: 5vw;
        font-family:"Haettenschweiler";
        top: 26vw;
        color: whitesmoke;
        left: 31%;
    }

    .slideshow-container button
    {
        background-color: orange;
        text-align: center;
        font-family:"Agency FB";
        font-size: 2.3vw;
        width: 20vw;
        height: 5vw;
        position: absolute;
        top:33vw;
        left: 40%;
        z-index: 1;
        cursor:pointer;
        border: none;
    }

    .slideshow-container button:hover
    {
        background-color: rgb(39, 163, 240);
        color: whitesmoke;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }
    
    .card1
    {
        width: 100%;
        height: 77vw;
        background-color:whitesmoke;
        position: relative;
    }

    .header
    {
        position: absolute;
        text-align: center;
        top: 3vw;
        left: 43%;
        font-family: "Forte";
        font-size: 2vw;
    }

    .header1
    {
        position: absolute;
        text-align: center;
        top: 7vw;
        left: 35%;
        font-family: "Haettenschweiler";
        font-size: 4vw;
    }
    
    .column {
        position: relative;
        float: left;
        top: 13vw;
        width: 31%;
        height: 27vw;
        margin-left: 1vw;
        margin-right: 1vw;
        margin-top: 2vw;
        background-color: rgb(75, 74, 74);
        z-index: 1; 
    }

    .column img
    {
        width: 100%;
        height: 100%;
        color: white;
    }

    .column img .alt
    {
        color: white;
    }

    .column:hover img
    {
        opacity:0.5;
    }

    .column .name
    {
        position: absolute;
        top: 2vw;
        left: 10%;
        font-size: 3.7vw;
        color: cornsilk;
        font-family: "Brush Script Mt";
    }

    .column .detail
    {
        width: 90%;
        position: absolute;
        top: 16vw;
        left: 55%;
        font-family: "Agency FB";
        font-size: 1.9vw;
        color: cornsilk;
        opacity: 0;
        transition: .5s ease;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }

    .column:hover .detail
    {
        opacity: 1;
    }

    .card1 .more
    {
        z-index: 1;
        font-size: 2.3vw;
        font-family: "Agency FB";
        background-color: inherit ;
        position: relative;
        border: none;
        width: 17.9vw;
        height: 2.7vw;
        top: 15vw;
        padding: 1vw;
        left: 40%;
        cursor: pointer;
        text-decoration: none;
        color: black;
    }
    .more .dots
    {
        position:absolute;
        top: 2.1vw;
        left: 19.9vw;
        transition: .5s ease;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        opacity: 0;
    }
    .more:hover
    {
        width:21vw ;
        color: rgb(48, 118, 223);
    }

    .more:hover .dots
    {
        opacity: 1;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    
    .card2
    {
        width: 100%;
        height: 50vw;
        position: relative;
    }

    .column1 {
        position: relative;
        float: left;
        top: 13vw;
        width: 31%;
        height: 27vw;
        margin-left: 1vw;
        margin-right: 1vw;
        margin-top: 2vw;
        z-index: 1; 
    }

    .column1 img
    {
        border-radius: 30%;
        width: 35%;
        height: 40%;
        margin-left: 9vw;
        margin-top: 1vw;
        background-color: rgb(69, 144, 243);
    }

    .column1 .service
    {
        color: black;
        position:absolute;
        font-family:"Haettenschweiler";
        font-size: 1.9vw;
        margin-left: 0.5vw;
        margin-top: 1vw;
    }

    .column1 .description
    {
        color: black;
        position:absolute;
        font-family:"Agency FB";
        font-size: 1.9vw;
        margin-left: 0.5vw;
        margin-top: 5.7vw;
    }
    .column1:hover
    {
        background-color: rgb(160, 211, 253);
    }

    .dashboard
    {
        width: 100%;
        height: 50vw;
        position: relative;
        background-color: #1a55c2;
    }

    .footer
    {
        width: 100%;
        height: 27vw;
        position: relative;
        background-color: #262e3d;
    }

    .column2 {
        position: relative;
        float: left;
        top: 1vw;
        width: 23%;
        height: 20vw;
        margin-left: 1vw;
        margin-right: 0.7vw;
        margin-top: 1vw;
        z-index: 1; 
    }

    .column2 .heading
    {
        color:white;
        position:relative;
        font-family:"Agency FB";
        font-size: 2.5vw;
        margin-left: 0.9vw;
        margin-top: 1.5vw;
    }

    
    .column2 .description
    {
        color: white;
        position:relative;
        font-family:"Agency FB";
        font-size: 1.9vw;
        margin-left: 0.9vw;
        margin-right: 3.7vw;
        margin-top: 1.5vw;
    }

    .column2 .link1
    {
        color: white;
        position:relative;
        font-family:"Agency FB";
        font-size: 1.9vw;
        margin-left: 0.9vw;
        margin-top: 1.5vw;
    }

    
    .column2 .links
    {
        color: white;
        position:relative;
        font-family:"Agency FB";
        font-size: 1.9vw;
        margin-left: 0.9vw;
        margin-top: 0.5vw;
    }

    .column2 .contact
    {
        margin-top: 1.5vw;
        height: 11%;
        width: 50%;
    }

    .column2 .mail
    {
        margin-top: 1.5vw;
        height: 11%;
        width: 90%;
    }

    .contact img
    {
        height:3vw;
        width: 3vw;
        border-radius: 10vw;
        float: left;
    }

    .contact  .text
    {
        margin-top:0.5vw;
        position:absolute;
        margin-left: 5vw;
        color: white;
        font-family: "Agency FB";
        font-size: 2vw;
        float: right;
       
    }

    .mail img
    {
        height:3vw;
        width: 3vw;
        border-radius: 10vw;
        float: left;
    }

    .mail  .text
    {
        margin-top:0.5vw;
        position:absolute;
        margin-left: 5vw;
        color: white;
        font-family: "Agency FB";
        font-size: 1.7vw;
        float: right;
    }

    .end
    {
        width: 100%;
        height: 5.5vw;
        background-color: #2f58a3;
        float: left;
        color: white;
        font-family: "Agency FB";
        font-size: 2vw;
        text-align: center;
        padding-top: 2vw;
    }

</style>  
</head>
<body>
    <title>Travel Buddy</title>
    <div class="container">
        <p class="p1">9998887723</p>
        <p class="p1">.</p>
        <p class="p1">travelbuddy@gmail.com</p>
        <p class="p1">.</p>
        <p class="p1">Mumbai, India</p>
        <a href="Signup_Form.php">Sign Up</a>
        <a href="Sign_In.php">Sign In</a>
    </div>
    <div class="navbar">
        <div class="a1"><image src="Images/travellogo.png"  class="navimage" alt="Website Logo"></image></div>
        <a href="#">CONTACT US</a>
        <a href="#">DASHBOARD</a>
        <a href="home.php">HOME</a>
    </div>
    
    
    <div class="slideshow-container">
        <div class="header">Travel to your favourite Destinations with <br> Travel Buddy</div>
        <div class="header1">Plan Your First Tour Now</div>
        <button>Plan a Tour</button>
        <div class="mySlides fade" >
          <img src="Images/Slideshow/travel1.jpg"style=" width:100% ;height: 40vw" alt="Slideshow image1">
        </div>
        
        <div class="mySlides fade">
          <img src="Images/Slideshow/travel2.jpg" style=" width:100% ;height: 40vw" alt="Slideshow image2">
        </div>
        
        <div class="mySlides fade">
          <img src="Images/Slideshow/travel3.jpg" style=" width:100% ;height: 40vw" alt="Slideshow image3">
        </div>
        
        <div class="mySlides fade">
            <img src="Images/Slideshow/travel4.jpg" style=" width:100% ;height: 40vw" alt="Slideshow image4">
        </div>
        
        <div class="mySlides fade">
            <img src="Images/Slideshow/travel5.jpg" style=" width:100% ;height: 40vw" alt="Slideshow image5">
        </div>

    </div>
    
    <div class="card1">
        <div class="header">Around the world</div>
        <div class="header1">Top Destinations to visit</div>
        
        <div class="row">
        
        <div class="column">
        <a href="#"><img src="Images/Places/paris.jpg" alt="Image of the city Paris ">
        <div class="name">Paris,France</div>
        <div class="detail">1.Start the day on the Champs-??lys??es
        <br>2.Go to the top of the Eiffel Tower
        <br>3.Must-See: Louvre museum
        <br>4.Must-See: Notre Dame Cathedral
        <br>5.Have fun at Disneyland Paris
        <br><br>Click for more details...
        </div>
        </a>
        </div>

        <div class="column">
            <a href="#"><img src="Images/Places/toronto.jpg" alt="Image of the city Toronto ">
            <div class="name">Toronto,Canada</div>
            <div class="detail">1.See the View from the CN Tower
            <br>2.Visit the Royal Ontario Museum (ROM)
            <br>3.Ripley's Aquarium of Canada
            <br>4.Art Gallery of Ontario (AGO)
            <br>5.Day Trip to Niagara Falls
            <br><br>Click for more details...
            </div>
            </a>
        </div>

        <div class="column">
            <a href="#"><img src="Images/Places/losangeles.jpg" alt="Image of the city Los Angeles ">
            <div class="name">Los Angeles,USA</div>
            <div class="detail">1.Universal Studios Hollywood
            <br>2.Griffith Park and Griffith Observatory
            <br>3.Disneyland Resort
            <br>4.Hollywood
            <br>5.Natural History Museum of Los Angeles County
            <br><br>Click for more details...
            </div>
            </a>
        </div>

        <div class="column">
            <a href="#"><img src="Images/Places/mumbai.jpg" alt="Image of the city Mumbai ">
            <div class="name">Mumbai,India</div>
            <div class="detail">1.Gateway of India
            <br>2.Sanjay Gandhi National Park
            <br>3.Red Carpet Wax Museum
            <br>4.Haji Ali Dargah
            <br>5.Marine Drive
            <br><br>Click for more details...
            </div>
            </a>
        </div>

        <div class="column">
            <a href="#"><img src="Images/Places/tokyo.jpg" alt="Image of the city Tokyo ">
            <div class="name">Tokyo,Japan</div>
            <div class="detail">1.Tour to The Imperial Palace
            <br>2.Visit the Sens??-ji Temple
            <br>3.Enjoy Nature at Ueno Park and Ueno Zoo
            <br>4.Wander through the Tokyo National Museum
            <br>5.See the View from the Tokyo Skytree
            <br><br>Click for more details...
            </div>
            </a>
        </div>

        <div class="column">
            <a href="#"><img src="Images/Places/melbourne.jpg" alt="Image of the city Melbourne ">
            <div class="name">Melbourne,Australia</div>
            <div class="detail">1.Federation Square
            <br>2.Royal Botanic Gardens
            <br>3.Parliament House
            <br>4.Eureka Tower
            <br>5.Queen Victoria Market
            <br><br>Click for more details...
            </div>
            </a>
        </div>
    </div>
    <div ><a href="#" class="more">Check more destinations <div class="dots">...</div></a></div>
    </div>   
    
    <div class="card2">

        <div class="header">Services Provided </div>
        <div class="header1">by Travel Buddy to you</div>

        <div class="row">
            
            <a href="#">
                <div class="column1">
                <img src="Images/services/document_protection.jpg" alt="Image of the city Melbourne ">
                <div class="service">Document Scanning & Protection</div>
                <div class="description">Travel Buddy provides you a platform where you can save 
                    important documents that you need for travelling with security .
                </div> 
                </div>
            </a> 

            <a href="#">
                <div class="column1">
                <img src="Images/services/destination.jpg" alt="Image of the city Melbourne ">
                <div class="service">Recommended Destinations</div>
                <div class="description">Travel Buddy provides you recommended destinations all over the world with
                    places to visit and much more. 
                </div> 
                </div>
            </a>  

            <a href="#">  
                <div class="column1">
                <img src="Images/services/checklist.png" alt="Image of the city Melbourne ">
                <div class="service">Tour Dashboard & Rules and Regulations</div>
                <div class="description">Travel Buddy provides you a platform where you can save 
                    important documents that you need for travelling with security .
                </div>
                </div> 
            </a>  

        </div>
    </div>

    <div class="dashboard">
        <img src="Images/dashboard.gif" width="60%" height="100%" style="margin-left: 20vw;">
    </div>

    <div class="footer">
        <div class="column2">
            <div class="heading">ABOUT</div>
            <div class="description">Travel Buddy is a travel website which manages all your travelling data including your Flight details,
                 Hotel details and much more ... </div>
        </div>

        <div class="column2">
            <div class="heading">LINKS</div>
            <a href="#" style="text-decoration: none;"><div class="link1">Help Center</div></a>
            <a href="#" style="text-decoration: none;"><div class="links">Destinations</div></a>
            <a href="#" style="text-decoration: none;"><div class="links">Packages</div></a>
            <a href="#" style="text-decoration: none;"><div class="links">Privacy Policy</div></a>
            <a href="#" style="text-decoration: none;"><div class="links">View Rules</div></a>
        </div>

        <div class="column2">
            <div class="heading">INFO</div>
            <div class="description">This website was made my the Hypertext-Assasins-HAZS Group
                in order to provide all in one platform to the users and ease of usage
            </div>
        </div>

        <div class="column2">
            <div class="heading">CONTACT</div>
            <div class="contact"><img src="Images/phone.jpg"><div class="text">99878222</div></div>
            <div class="mail"><img src="Images/mail.jpg"><div class="text">travelbuddy@gmail.com</div></div>
            <div class="contact"><img src="Images/location.jpg"><div class="text">Mumbai,In</div></div>
        </div>
    </div>
    <div class="end">?? Copyright Reserved with Hypertext-Assasins-HAZS</div>
</body>

<script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      slides[slideIndex-1].style.display = "block";  
      setTimeout(showSlides, 10000); // Change image every 2 seconds
    }

    </script>
</html>
