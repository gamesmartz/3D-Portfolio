  <?php 
    include ('modules/head.php') 
  ?> 
  <title>Matt Norkaitis - Portfolio</title>
</head>

<body style="position: relative; " data-spy="scroll" data-target=".navbar" data-offset="50">

  <?php 
    include ('modules/navbar.php') 
  ?> 

  <header id="header-target" class="header-style">
    
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto text-center text-white">
          <div class="header-title">Matt Norkaitis</div>
          <div class="masthead-subtitle">Company: Tech Magic</div>
          <div class="masthead-subtitle">Consultant - 3d Modeler / Photoshop Artist / Front-End Developer</div>
        </div>
      </div>
    </div>

    <div class="scroll-down d-flex justify-content-center align-items: center">
      <a class="btn js-scroll-trigger" href="#about">
        <svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" data-prefix="fas" data-icon="angle-down" role="img"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
          <path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
        </svg>       
      </a>
    </div>

  </header>

  <div class="page-section" id="about">
    <div class="container container-me">
      <div class="row">
        
        <div class="col-lg-6">
        <a href="digital-art.php"> <img src="assets/img/me-painting-golden-horizon.jpg" class="img-fluid rounded my-5" alt="painting-golden-horizon"></a>
        </div>

        <div class="col-lg-6 text-center my-auto">
          <h1>Hi, I'm Matt Norkaitis</h1>
          <p>I am an Artist living in Irvine Ca. Thanks for being here!</p>
        </div>
      </div>
    </div>
  </div> 
   
  </div>

  <section id="portfolio" class="page-section bg-light">
    <div class="container-fluid">
      <div class="wow fadeIn text-center">
        <h1 class="thick-bold-raleway">Portfolios</h1>
      </div>
      <div class="row text-center">
        <div class="col-lg-3 col-md-6">
          <a href="digital-art.php">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100">
              <img src="assets/img/artist-pallet.png" alt="Artist Pallet">
              <h3>Digital Art</h3>
              <p class="mb-0">Digital Painting with Photoshop</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="3d-modeling.php">
            <div class="px-4 pb-4 pb-lg-0 h-100">
              <img src="assets/img/3d-shape.png" alt="3d Shape">
              <h3>3d Modeling</h3>
              <p class="mb-0">3d modeling for architecture and entertainment.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="front-end-dev.php">
            <div class="px-4 pb-4 pb-lg-0 h-100">
              <img src="assets/img/closing-braces.png" alt="Closing Braces">
              <h3>Front-End Development</h3>
              <p class="mb-0">Web creation with html/css/oop javascript.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="photo-manipulation.php">
            <div class="wow fadeIn px-4 h-100">
              <img src="assets/img/photo-add-subtract.png" alt="Photoshop Logo">
              <h3>Photo Manipulation</h3>
              <p class="mb-0">Adding/subtracting/modifying images with photoshop</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <div>
    <section id="contact" class="page-section form-container">
      <div class="container">
        
      <div class="text-center">
          <h2>Contact Me</h2>
          <p>Thanks for being here! -Matt</p>
      </div>

      <div class="row justify-content-md-center">
          
      <a href="https://www.linkedin.com/in/matthew-norkaitis-8a0a0831"><div class="contact-links"><img src="assets/img/linkedin-logo.png" alt="LinkedIn Logo"></div></a>
      <a href="https://github.com/gamesmartz"><div class="contact-links"><img src="assets/img/github-logo.png" alt="GitHub Logo"></div></a>
      <a href="http://awnold.cgsociety.org/"><div class="contact-links" style="margin-top: 30px;"><img src="assets/img/cg-society.png" alt="CG Society Logo"></div></a>

    </div>
    </section>
  </div>

<?php
  include ('modules/footer.php');
?>

</body>
</html>