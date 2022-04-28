<?php require ('modules/head.php') ?>

  <title>Textures - Matt Norkaitis</title>

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

          </div>
      </div>

<?php //Title ?>
    <h2 class="thick-bold-raleway portfolio-titles">Textures</h2>
    <hr class="colored">

    <div class="position-relative">



    <div class="portfolio-piece mix identity">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/ecosystems-yellow-turquoise-600.jpg" alt="Ecosystems yellow turquoise texture" title="Ecosystems yellow turquoise texture" class="digital-painting-images" id="ecosystems-yellow-turquoise-1300">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Ecosystems, Yellow Turquoise</span>
          </div>
        </div>
      </div>
    </div>

        <div class="portfolio-piece mix identity">
            <div class="portfolio-wrapper">
                <img src="assets/img/digital-painting/ecosystems-yellow-turquoise-3d-600.jpg" alt="Ecosystems yellow turquoise texture" title="Ecosystems yellow turquoise texture" class="digital-painting-images" id="ecosystems-yellow-turquoise-3d-1300">
                <div class="caption">
                    <div class="caption-text">
                        <span class="text-category">Ecosystems, Yellow Turquoise</span>
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