

<!DOCTYPE html>
<html>
<title>Suraj Shukla Personal Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="myimage1.png" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#projects" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>Projects</p>
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
    <a href="#projects" class="w3-bar-item w3-button" style="width:25% !important">Projects</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"> Hii, I'm </span> Suraj Shukla.</h1>
    <p>UI/UX Developer and Web Designer.</p>
    <img src="myimage1.png" alt="boy" class="w3-image" width="400" height="450">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Info </h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Passionate web designer, skilled in Adobe Creative Suite, 
      HTML, CSS, Javascript. Creates seamless UX and UI with creative but functional designs. 
      Designed 5+ websites, including an ecommerce Shopping Website like Amazon. Also, Made an Super  
      Mario Game Using Python In which i got the first prize in Online Gaming event.
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">UI/UX</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"> 85% </div>
    </div>
    <p class="w3-wide">Web Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"> 95% </div>
    </div>
    <p class="w3-wide">Photoshop</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"> 80% </div>
    </div><br>
    <p class="w3-wide">Sql Database</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"> 80% </div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">20+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">12+</span><br>
        Certifications
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">15+</span><br>
        Presentations
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <a href="https://github.com/Suraj7506"><b> Download Resume </b></a>
    </button>
    
    <!-- Languages Known -->
    <h3 class="w3-padding-16 w3-text-light-grey">Programming Skills</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          
          <li class="w3-padding-16">Html</li>
          <li class="w3-padding-16">CSS</li>
          <li class="w3-padding-16">Javascript</li>
          <li class="w3-padding-16">PHP</li>
          <li class="w3-padding-16">Python</li>
          <li class="w3-padding-16">Java</li>
          <li class="w3-padding-16">jQuery</li>
          <li class="w3-padding-16">Angular.Js</li>
          <li class="w3-padding-16">React.Js</li>
          <li class="w3-padding-16">TypeScript</li>
          <li class="w3-padding-16">Wordpress</li>
          
                         
      </ul>
      </div>
       
      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          
          <li class="w3-padding-16">Sql</li>
          <li class="w3-padding-16">C</li>
          <li class="w3-padding-16">C++</li>
          <li class="w3-padding-16">MySQL</li>
          <li class="w3-padding-16">Node.js</li>
          <li class="w3-padding-16">Flask</li>
          <li class="w3-padding-16">MongoDb</li>
          <li class="w3-padding-16">Django</li>
          <li class="w3-padding-16">Web Scraping</li>
          <li class="w3-padding-16">Linux</li>
          <li class="w3-padding-16">Bootstrap</li>

          
        </ul>
      </div>

    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>  
    <img src="bandmember.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
    <p>Suraj Shukla saved us from a web disaster.</p><br>
    
    <img src="avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than Suraj Shukla.</p>
  <!-- End About Section -->


  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="projects">
    <h2 class="w3-text-light-grey">Projects</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <p><b> I wrote my first HTML code in 2019 that says 
      "Hello World", I found it interesting, so I started learning 
      to code. I am a student, currently pursuing a degree in 
      Information Technology.</b><p>

       <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <a href="https://github.com/Suraj7506"><b> View Projects </b></a>
    </button> 

    <h3 class="w3-text-light-grey">Experience </h3>
    <hr style="width:200px" class="w3-opacity">
    <p><b> I have a 3 month Experience in Digital Marketing and 
      Graphic Designer using Adobe Photoshop/illustrator,also have 3 month Experience
      in Web Development and designing</b></p>

    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Mumbai, India</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: sdshukla270@gmail.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

    <form action="" method="post">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="text">
          <a href = "mailto: sdshukla270@gmail.com">Send Message</a>
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <a href="https://www.facebook.com/profile.php?id=100009028896282" class="fa fa-facebook"></a>
<a href="https://twitter.com/SurajShukla21?s=20" class="fa fa-twitter"></a>
<a href="https://www.yourquote.in/sd-shukla-bi00r/quotes" class="fa fa-google"></a>
<a href="https://www.linkedin.com/in/suraj-shukla-748497203" class="fa fa-linkedin"></a>
<a href="https://instagram.com/_suraj_shukla._?utm_medium=copy_link" class="fa fa-instagram"></a>
<a href="https://in.pinterest.com/sdshukla270/_saved/" class="fa fa-pinterest"></a>
<a href="https://github.com/Suraj7506" class="fa fa-github"></a>


    <p class="w3-medium">Designed by <a href="https://github.com/Suraj7506" target="_blank" class="w3-hover-text-green">Suraj Shukla </a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
