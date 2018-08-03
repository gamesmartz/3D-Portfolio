<?php 
  include ('modules/head.php')
?>
  <title>Digital Painting - Matt Norkaitis</title>

<script src="./assets/js/digital-painting.js"></script>

</head>

<div style="
    position: fixed;
    z-index: 2;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);

    ">
      <div style=" 
      height: 100%;     
      display: flex;
      align-items: center;
      justify-content: center;          
      
      ">

        <img src="assets/img/digital-painting/explore-1300.jpg" alt="">
      </div>

</div>




<?php
  include ('modules/navbar-portfolios.php');
?>

<!-- Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>


<section id="portfolio" class="page-selection" ><?php //section start ?>
  
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

    <div class="portfolio-piece mix identity" title="Explore">
      <div class="portfolio-wrapper">
        <img src="assets/img/digital-painting/explore-600.jpg" alt="" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Explore</span>
          </div>   
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Captain's Quarters">
      <div class="portfolio-wrapper">
        <img src="assets/img/project2.jpg" alt="Captain's Quarters" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Captain's Quarters</span>
          </div>      
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Dragon Range">
      <div class="portfolio-wrapper">
        <img src="assets/img/project3.jpg" alt="Dragon Range" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Dragon Range</span>
          </div>       
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Gold Horizon">
      <div class="portfolio-wrapper">
        <img src="assets/img/project4.jpg" alt="Gold Horizon" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Gold Horizon</span>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Last Bridge">
      <div class="portfolio-wrapper">
        <img src="assets/img/project5.jpg" alt="Last Bridge" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Last Bridge</span>
          </div>  
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Guardians">
      <div class="portfolio-wrapper">
        <img src="assets/img/project6.jpg" alt="Guardians" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Guardians</span>
          </div>     
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Sunset Journey">
      <div class="portfolio-wrapper">
        <img src="assets/img/project7.jpg" alt="Sunset Journey" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Sunset Journey</span>
          </div> 
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Mist and Forest">
      <div class="portfolio-wrapper">
        <img src="assets/img/project8.jpg" alt="Mist and Forest" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Mist and Forest</span>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="The Core">
      <div class="portfolio-wrapper">
        <img src="assets/img/project9.jpg" alt="The Core" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">The Core</span>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-piece mix identity" title="Tree Home">
      <div class="portfolio-wrapper">
        <img src="assets/img/project10.jpg" alt="Tree Home" style="width: 100%;">
        <div class="caption">
          <div class="caption-text">
            <span class="text-category">Tree Home</span>
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