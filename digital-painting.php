<?php require ('modules/head.php') ?>

  <title>Digital Painting - Photoshop - Matt Norkaitis</title>

<script src="./assets/js/digital-painting.js"></script>

</head>

<?php require ('modules/navbar-portfolios.php'); ?>

<?php //Pop Up Modal ?>
<div class="imageModal">
    <div class="imageModal-content">
        <img src="assets/img/digital-painting/explore-1300.jpg" class="modal-digital-painting-image">
    </div>
</div>

<section class="page-section">
  
  <div class="container text-center">

      <?php //Bottom Icons ?>
      <div style="margin-top:50px;">
          <div>
              <img class="skill-sets" src="assets/img/pencil-paper-icon.png" alt="Pencil and Paper">
              <a href="https://www.adobe.com/products"><img class="skill-sets" src="assets/img/photoshop-icon.png" alt="Photoshop"></a>
          </div>
      </div>

<?php //Title ?>
    <h2 class="thick-bold-raleway portfolio-titles">Digital Painting</h2>
    <hr class="colored">

    <div class="position-relative">

<?php //Chevrons ?>
    <div class="chevrons-container">

    <a href="photoshop-wizardry">
        <i class="chevron-left large material-icons" style="font-size: 100px">chevron_left</i>
    </a>
    <a href="front-end-dev">
    <i class="chevron-right large material-icons" style="font-size: 100px">chevron_right</i>
    </a>

    </div>

    <div class="portfolio-piece mix identity">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/explore-600.jpg" alt="Painting of two Explorers Deep in a Dungeon" title="Painting of two Explorers Deep in a Dungeon" class="digital-painting-images" id="explore-1300">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Explore</span>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/captains-quarters-600.jpg" alt="Painting of inside a Pirate Captains Quarters" title="Painting of inside a Pirate Captains Quarters" class="digital-painting-images" id="captains-quarters-1300">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Captain's Quarters</span>
          </div>      
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/dragon-range-600.jpg" alt="Painting of a Landscape in Mist" title="c" class="digital-painting-images" id="dragon-range-1300">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Dragon Range</span>
          </div>       
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/gold-horizon-600.jpg" alt="Painting of a Sunset over a Future City" title="Painting of a Sunset over a Future City" class="digital-painting-images" id="gold-horizon-1300">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Gold Horizon</span>
          </div>
        </div>
      </div>
    </div>

        <div class="portfolio-piece mix identity">
            <div class="portfolio-wrapper">
                <img src="assets/img/digital-painting/starlight-home-600.jpg" alt="Starlight Home" title="Starlight Home" class="digital-painting-images" id="starlight-home-1300">
                <div class="caption">
                    <div class="caption-text">
                        <span class="text-category">Starlight Home</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php //Container End ?>
  </div>
</section>

<?php include ('modules/footer.php') ?>

</body>
</html>