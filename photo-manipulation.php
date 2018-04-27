<?php 
  include ('modules/head.php')
?>
  <title>Photo Manipulation with Photoshop - Matt Norkaitis</title>
</head>

<body>

<?php 
    include ('modules/navbar.php') 
?> 

<section class="page-section"><?php //section start ?>

  <div class="container text-center"><?php //container start ?>

    <h2 class="thick-bold-raleway" style="font-size: 48px;" >Photo Manipulation with Photoshop</h2>
    <hr class="colored">

    <div class="position-relative"><?php //portfolio pieces container start ?>

    <div class="chevrons-container">
      <a href="digital-art">
        <i class="chevron-right large material-icons" style="font-size: 80px">chevron_right</i>
      </a>
      <a href="front-end-dev">
        <i class="chevron-left large material-icons" style="font-size: 80px">chevron_left</i>
      </a>      
    </div>

      <div class="portfolio-piece mix identity" title="Photo Manipulation with Photoshop">
        <div class="portfolio-wrapper">
          <a href="https://youtu.be/rjCspcflgOU"><img src="assets/img/photo-manipulation-photoshop.jpg" alt="" style="width: 100%;"></a>
          <div class="caption">
            <div class="caption-text">
              <span class="text-category">Photo Manipulation with Photoshop</span>
            </div>
            <div class="caption-bg"></div>
          </div>
        </div>
      </div>

      <div style="margin-top:50px;">
        <h5>Photoshop - Maya</h5>
        <div>
          <a href="https://www.adobe.com/products"><img class="skill-sets" src="assets/img/photoshop-icon.png" alt="Photoshop"></a>
          <a href="https://www.autodesk.com/products/maya/overview"><img class="skill-sets" src="assets/img/autodesk-maya.png" alt="Autodesk Maya"></a>
        </div>     
      </div>

    </div><?php //portfolio pieces container end ?>

    </div><?php //container end ?>

</section><?php //section end ?>

<footer class="footer" style="background-image: url('assets/img/pirate-ship-background.jpg'); color: #fff;">
<?php 
    include ('modules/footer.php') 
?> 

</body>
</html>