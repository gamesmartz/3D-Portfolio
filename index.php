  <?php 
    include ('modules/head.php') 
  ?> 
  <title>Matt Norkaitis - 3d Artist / Front End Designer / Front End Developer - Irvine CA</title>
</head>

  <?php 
    include ('modules/navbar.php') 
  ?> 

  <header id="header-target" class="header-style">
    
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto text-center text-white">
          <div class="header-title">Matt Norkaitis</div>
          <div class="masthead-subtitle">Company: Tech Magic</div>
          <div class="masthead-subtitle"><a href="3d-artist">3d Artist</a> / <a href="front-end-dev">Front End Designer / Front End Developer</a> / <a href="digital-painting">Digital Painter</a> / <a href="#about">Single Parent</a></div>
        </div>
      </div>
    </div>

    <div class="scroll-down d-flex justify-content-center">
      <a class="btn js-scroll-trigger" href="#about">
        <svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" data-prefix="fas" data-icon="angle-down" role="img"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
          <path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
        </svg>       
      </a>
    </div>

  </header>

  <div class="page-section" id="about">
    <div class="container container-me text-center">
      <div class="row">
        
        <div class="col-lg-6">
        <a href="digital-art.php"> <img src="assets/img/me-painting-golden-horizon.jpg" class="img-fluid rounded my-5" alt="painting-golden-horizon"></a>
        </div>

        <div class="col-lg-6 my-auto">
         <h1>Hi, I'm Matt Norkaitis</h1>
          <hr class="colored">
          <p>I am a <a href="3d-modeling.php">3d Artist</a>, <a href="digital-art.php">Front End Designer</a> and <a href="front-end-dev.php">Front End Developer</a> living in Irvine Ca. All the images and content on this site are my own. I have 15 years experience as a 3d Artist, and 7 years experience as a Front End Designer / Front End Developer. Thanks for visting my site, much appreciated!</p>
          <p>I'm current developing a learning tool for kids as well as running the technical aspects of a furniture company my partner and I started 8 years ago, growing the company from nothing to the largest privately owned furniture company in Orange County.</p>
          <p>I am also a single father who has raised his son from 1 years old to 14 solo.</p>        
        </div>
      </div>
    </div>
  </div> 
   
  </div>

  <section  class="page-section bg-light">
    <div id="portfolio" class="container-fluid">
      <div class="wow fadeIn text-center">
        <h1 class="thick-bold-raleway">Portfolios</h1>
      </div>
      <div class="row text-center">
        <div class="col-lg-3 col-md-6">
          <a href="digital-painting">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100">
              <img src="assets/img/artist-pallet.png" alt="Artist Pallet">
              <h3>Digital Painting</h3>
              <p class="mb-0">Digital Painting with Photoshop</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="3d-artist">
            <div class="px-4 pb-4 pb-lg-0 h-100">
              <img src="assets/img/3d-shape.png" alt="3d Shape">
              <h3>3d Artist</h3>
              <p class="mb-0">3d Modeling for Architecture and Entertainment.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="front-end-dev">
            <div class="px-4 pb-4 pb-lg-0 h-100">
              <img src="assets/img/closing-braces.png" alt="Closing Braces">
              <h3>Front-End Design / Development</h3>
              <p class="mb-0">Programming with html / css / javascript / php / mysql.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="photoshop-wizardry">
            <div class="wow fadeIn px-4 h-100">
              <img src="assets/img/photo-add-subtract.png" alt="Photoshop Logo">
              <h3>Photoshop Wizardry</h3>
              <p class="mb-0">Adding / Subtracting / Modifying Images with Photoshop</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <div>
    <section id="contact" class="page-section">
      <div class="container text-center">
        
      <div>
          <h2>Contact Me</h2>
          <p>Thanks for being here! -Matt</p>
      </div>

      <div class="justify-content-md-center">
          
      <a href="https://www.linkedin.com/in/matthew-norkaitis-8a0a0831"><div class="contact-links"><img src="assets/img/linkedin-logo.png" class="img-fluid" alt="LinkedIn Logo"></div></a>
      <a href="https://github.com/gamesmartz"><div class="contact-links"><img src="assets/img/github-logo.png" class="img-fluid" alt="GitHub Logo"></div></a>
      <a href="http://awnold.cgsociety.org/"><div class="contact-links" style="margin-top: 30px;"><img src="assets/img/cg-society.png" class="img-fluid" alt="CG Society Logo"></div></a>

    </div>
    </section>
  </div>

<?php
  include ('modules/footer.php');
?>

</body>
</html>