<?php 
  include ('modules/head.php')
?>
  <title>Front End Developement - JS - PHP - CSS - Portfolio - Matt Norkaitis</title>
</head>
<body>

<?php 
    include ('modules/navbar.php') 
?> 

<section class="page-section">

  <div class="container text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn; position: relative; ">
    <h2 class="thick-bold-raleway">Front End Development</h2>
    <hr class="colored">
    
    <a href="3d-modeling.php"><div class="portfolio-chevron-left"><i class="large material-icons" style="font-size: 80px">chevron_left</i></div></a>
    <a href="photo-manipulation.php"><div class="portfolio-chevron-right"><i class="large material-icons" style="font-size: 80px">chevron_right</i></div></a>
    <div class="portfolio-grid " id="portfolioList">


      <a href="https://github.com/gamesmartz/Memory-Match-JS-OOP">
        <div class="portfolio-piece mix identity" title="Memory Match Art Portfolio">
          <div class="portfolio-wrapper">
            <img src="assets/img/memory-match.jpg" alt="" style="width: 100%;">
            <div class="caption">
              <div class="caption-text">
                <span class="text-category">Memory Match Art Portfolio<br>javascript oop<br>html5</span>
              </div>
              <div class="caption-bg"></div>
            </div>
          </div>
        </div>
      </a>

      <a href="https://github.com/gamesmartz/Connect-Four-JS">
        <div class="portfolio-piece mix identity" title="Caribbean Connect 4">
          <div class="portfolio-wrapper">
            <img src="assets/img/caribbean-connect-4.jpg" alt="" style="width: 100%;">
            <div class="caption">
              <div class="caption-text">
                <span class="text-category">Caribbean Connect 4<br>javascript oop<br>html5</span>
              </div>
              <div class="caption-bg"></div>
            </div>
          </div>
        </div>
      </a>     

</section>

<?php 
    include ('modules/footer.php') 
?> 

</body>
</html>