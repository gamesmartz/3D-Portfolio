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


      <a href="https://github.com/gamesmartz/Memory-Match-JS-OOP">
        <div class="portfolio-piece mix identity" title="Memory Match Art Portfolio">
          <div class="portfolio-wrapper">
            <img src="assets/img/memory-match.jpg" alt="" style="width: 100%;">
          </div>
        </div>
      </a>

      <a href="https://github.com/gamesmartz/Connect-Four-JS">
        <div class="portfolio-piece mix identity" title="Caribbean Connect 4">
          <div class="portfolio-wrapper">
            <img src="assets/img/caribbean-connect-4.jpg" alt="" style="width: 100%;">  
          </div>
        </div>
      </a>

      <div style="margin-top:50px;">
        <h5>Photoshop - HTML - CSS - Javascript - PHP - Mysql</h5>
        <div>
          <a href="https://www.adobe.com/products"><img class="skill-sets" src="assets/img/photoshop-icon.png" alt="Photoshop"></a>
          <a href="https://en.wikipedia.org/wiki/HTML"><img class="skill-sets" src="assets/img/html-logo.png" alt="HTML"></a>
          <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets"><img class="skill-sets" src="assets/img/css-logo.png" alt="CSS"></a>
          <a href="https://en.wikipedia.org/wiki/JavaScript"><img class="skill-sets" src="assets/img/javascript-logo.png" alt="Javascript"></a>
          <a href="https://en.wikipedia.org/wiki/PHP"><img class="skill-sets" src="assets/img//php-mysql.png" alt="PHP / Mysql"></a>
        </div>     
      </div>

  </div><?php //container end ?>

</section>

<?php 
    include ('modules/footer.php') 
?> 

</body>
</html>