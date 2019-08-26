<!DOCTYPE html>
<html>
<head>
<title>eToyin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<script type="text/javascript" src="script/gen_validatorv31.js"></script>
</head>

<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="images/img2.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Toyin Emmanuel.</h1>
    <h3>Web App Developer and Designer.</h3>
    <!--img src="images/img2.jpg" alt="boy" class="w3-image" width="500" height="720"-->
    <div id="img" class="3-image"></div>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Toyin Emmanuel Adesina</h2>
    <hr style="width:80%" class="w3-opacity">
    <p>I'm a tech enthusiastic, a self taught Web developer, designer with interest in solar energy harnessing, Internet of Things (IoT) and Artificial Intelligence (AI). A graduate of Physics from the University of Ilorin, Ilorin Nigeria.
          I have a strong passion for problem solving through the use of modern technology. I'm a Front End (React) Developer.
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Responsive Web Development</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">React Js (Front End) </p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:75%"></div>
    </div>
    <p class="w3-wide">Redux (State Management)</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:65%"></div>
    </div>
    <p class="w3-wide">Code Igniter (Back End)</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:70%"></div>
    </div>
    <p class="w3-wide">Vanilla Javascript</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:70%"></div>
    </div>
    <p class="w3-wide">LESS</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:60%"></div>
    </div>
    <p class="w3-wide">Photoshop</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:60%"></div>
    </div><br>

    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">5+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">20+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">50+</span><br>
        Meetings
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i><a href="documents/resume.pdf" download> Download Resume</a>
    </button>

    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Solar Inverter</li>
          <li class="w3-padding-16">5GB Storage</li>
          <li class="w3-padding-16">limited Support</li>
          <li class="w3-padding-16">
            <h2>#150,000</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Solar Inverter</li>
          <li class="w3-padding-16">50GB Storage</li>
          <li class="w3-padding-16">Endless Support</li>
          <li class="w3-padding-16">
            <h2>#250,000 and above</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>

    <!-- Testimonials -->
    <!--h3 class="w3-padding-24 w3-text-light-grey">My Portfolio</h3>
    <img src="/w3images/bandmember.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
    <p>Jane Doe saved us from a web disaster.</p><br>

    <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than Jane Doe.</p-->
  <!-- End About Section -->
  </div>

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">My Portfolio</h2>
    <hr style="width:80%" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <div> Click <a href="https://codepen.io/etoyin/full/PEbyeo" target="blank">here</a> to view The Restaurant Web page design.
            <a href="https://codepen.io/etoyin/full/PEbyeo" target="blank">
                <img src="images/restaurant.jpeg" style="width:100%">
            </a>
        </div>
        <div> Click <a href="https://codepen.io/etoyin/full/LRrVNO" target="blank">here</a> to view The Local Weather App
            <a href="https://codepen.io/etoyin/full/LRrVNO" target="blank">
                <img src="images/weather.jpeg" style="width:100%">
            </a>
        </div>
        <div> Click <a href="https://codepen.io/etoyin/full/xggwVO" target="blank">here</a> to view the Wikipedia viewer App.
            <a href="https://codepen.io/etoyin/full/xggwVO" target="blank">
                <img src="images/wiki.jpeg" style="width:100%">
            </a>
        </div>
      </div>

      <div class="w3-half">
        <div> Click <a href="https://etoyinspe.000webhostapp.com/" target="blank">here</a> to view The SPE App.
          <a href="https://etoyinspe.000webhostapp.com/" target="blank">
            <img src="images/spe.jpeg" style="width:100%">
        </a>
        </div>

        <div> Click <a href="https://codepen.io/etoyin/full/oLmZzr" target="blank">here</a> to view The Random Quote App.
            <a href="https://codepen.io/etoyin/full/oLmZzr" target="blank">
                <img src="images/random-quote.jpeg" style="width:100%">
            </a>
        </div>
        <div> Click <a href="https://codepen.io/etoyin/full/BqwGGd" target="blank">here</a> to view The Video Landing Page.
            <a href="https://codepen.io/etoyin/full/BqwGGd" target="blank">
                <img src="images/video-coming-soon.jpeg" style="width:100%">
            </a>
        </div>

      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Lagos, Nigeria</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +2348189980451 </p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: toyinadesina60@gmail.com</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form method="post" name="myemailform" action="form-to-email.php">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="subject"></p>
      <p><textarea  rows="4" class="w3-input w3-padding-16" type="text" placeholder="Message" required name="message"></textarea></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" name="submit" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
        <!--input type="submit" class="w3-button w3-light-grey w3-padding-large" value=""-->
      </p>
    </form>
  <!-- End Contact Section -->
  </div>

    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <a href="facebook.com/"></a><i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by eToyin</p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

<script type="text/javascript">
  var frmvalidator  = new Validator("myemailform");
  frmvalidator.addValidation("name","req","Please provide your name");
  frmvalidator.addValidation("email","req","Please provide your email");
  frmvalidator.addValidation("email","email","Please enter a valid email address");
</script>
</body>
</html>
