<?php 
  require ('modules/head.php')
?>
  <title>Digital Painting - Matt Norkaitis</title>

<script src="./assets/js/digital-painting.js"></script>

</head>

<?php
  require ('modules/navbar-portfolios.php');
?>

<!-- Modal -->
<div class="imageModal">

    <div class="imageModal-content">
        <img src="assets/img/digital-painting/explore-1300.jpg" class="modal-digital-painting-image">
    </div>

<!--    <div id="caption">test</div>-->
</div>

<section class="page-section"><?php //section start ?>
  
  <div class="container text-center"  ><?php //container start ?>
    
    <h2 class="thick-bold-raleway portfolio-titles">Digital Painting</h2>
    <hr class="colored">

    <div class="position-relative"><?php //portfolio pieces container start ?>

    <div class="chevrons-container">  <?php //chevron start ?>    
      <a href="3d-artist">
        <i class="chevron-right large material-icons" style="font-size: 80px">chevron_right</i>
      </a>
      <a href="photoshop-wizardry">
        <i class="chevron-left large material-icons" style="font-size: 80px">chevron_left</i>
      </a>
    </div>   <?php //chevron end ?>

    <div class="portfolio-piece mix identity">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/explore-600.jpg" alt="explore-1300" title="Explore" class="digital-painting-images">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Explore</span>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Captain's Quarters">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/captains-quarters-600.jpg" alt="captains-quarters-1300" title="Captain's Quarters" class="digital-painting-images">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Captain's Quarters</span>
          </div>      
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Dragon Range">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/dragon-range-600.jpg" alt="dragon-range-1300" title="Dragon Range" class="digital-painting-images">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Dragon Range</span>
          </div>       
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Gold Horizon">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/gold-horizon-600.jpg" alt="gold-horizon-1300" title="Gold Horizon" class="digital-painting-images">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Gold Horizon</span>
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top:50px;">
      <h5> Photoshop - Pencil and Paper</h5>
      <div>
        <a href="https://www.adobe.com/products"><img class="skill-sets" src="assets/img/photoshop-icon.png" alt="Photoshop"></a>
        <img class="skill-sets" src="assets/img/pencil-paper-icon.png" alt="Pencil and Paper">
      </div>
    </div>

    </div><?php //portfolio pieces container end ?>

  </div><?php //container end ?>

</section><?php //section end ?>

<?php 
    include ('modules/footer.php') 
?> 

</body>
</html>