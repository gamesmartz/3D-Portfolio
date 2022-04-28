  <?php include ('modules/head.php'); ?>

  <title>Matthew Norkaitis - Portfolio</title>

</head>

  <?php include ('modules/navbar.php'); ?>

  <header id="header-target" class="header-style">
    
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto text-center text-white">
          <div class="header-title">Matt Norkaitis</div>
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

  <div class="page-section" id="about" style="padding-bottom: 50px;">
    <div class="container container-me text-center">
      <div class="row">

              <div class="col-lg-6">
                  <a href="digital-painting">
                      <img src="assets/img/me-painting-golden-horizon.jpg" class="img-fluid rounded my-5" alt="painting-golden-horizon">
                  </a>
              </div>

        <div class="col-lg-6 my-auto">
         <h1>Hi, I'm Matt Norkaitis</h1>
          <hr class="colored">
            <p>I am an artist, developer, single parent and CEO of Game Smartz.</p>
            <div style="font-size: 1.1em;">
                <p style="margin-bottom: 0.5rem; margin-top: 30px;"><a style="color: #00A3FF;" href="https://gamesmartz.com/">CEO Game Smartz</a></p>
                <p style="margin-bottom: 0.5rem;"><a style="color: #00A3FF;" href="digital-painting">Digital Painting</a></p>
                <p style="margin-bottom: 0.5rem;"><a style="color: #00A3FF;" href="textures">Textures</a></p>
                <p style="margin-bottom: 0.5rem;"><a style="color: #00A3FF;" href="front-end-dev">Development</a></p>
                <p style="margin-bottom: 0.5rem;"><a style="color: #00A3FF;" href="s-parent">Single Parent</a></p>
            </div>

        </div>
      </div>
    </div>
  </div> 
   
  </div>

  <section  class="page-section bg-light">
    <div id="portfolio" class="container-fluid">
      <div class="row" style="display: flex; justify-content: space-around; align-items: center;">
        <div class="">
          <a href="digital-painting">
            <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
              <img src="assets/img/artist-pallet.png" alt="Artist Pallet">
              <h3>Digital Painting</h3>
            </div>
          </a>
        </div>
        <div class="">
          <a href="textures">
              <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
              <img src="assets/img/3d-shape.png" alt="3d Shape">
              <h3>Texture</h3>

            </div>
          </a>
        </div>
        <div class="">
          <a href="front-end-dev">
              <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
              <img src="assets/img/closing-braces.png" alt="Closing Braces">
              <h3>Development</h3>

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
      </div>

      <div class="justify-content-md-center">
          
      <a href="https://github.com/gamesmartz"><div class="contact-links"><img src="assets/img/github-logo.png" class="img-fluid" alt="GitHub Logo"></div></a>
      <a href="https://www.linkedin.com/in/matthew-norkaitis"><div class="contact-links"><img src="assets/img/linkedin-logo.png" class="img-fluid" alt="LinkedIn Logo"></div></a>
      <a href="https://www.instagram.com/mattnorkaitis/"><div class="contact-links"><img src="assets/img/instagram-logo.png" class="img-fluid" alt="Instagram Logo"></div></a>

    </div>
    </section>
  </div>

<?php include ('modules/footer.php'); ?>

</body>
</html>