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
    
    <h2 class="thick-bold-raleway">Front End</h2>
    <hr class="colored">
    
    <a href="3d-modeling"><div class="portfolio-chevron-left"><i class="large material-icons" style="font-size: 80px">chevron_left</i></div></a>
    <a href="photo-manipulation"><div class="portfolio-chevron-right"><i class="large material-icons" style="font-size: 80px">chevron_right</i></div></a>

      <div class="portfolio-piece mix identity" title="Matts Memory Match Mashup">
        <div class="portfolio-wrapper">
          <a href="Memory-Match-JS-OOP/index"><img src="assets/img/memory-match.jpg" alt="Matts Memory Match Mashup" style="width: 100%;">
            <div class="caption">
              <div class="caption-text">
                <span class="text-category">Matts Memory Match Mashup</a></span>
              </div>            
            </div>
          </a>  
            <a href="https://github.com/gamesmartz/Memory-Match-JS-OOP"><img class="skill-sets" style="padding: 10px; width: 60px;" src="assets/img/github-skills.png" alt="Github Skills"></a>
        </div>
      </div>

      <div class="portfolio-piece mix identity" title="Caribbean Connect 4">
        <div class="portfolio-wrapper">
          <a href="Connect-Four-JS/index"><img src="assets/img/caribbean-connect-4.jpg" alt="Caribbean Connect 4" style="width: 100%;">
            <div class="caption">
              <div class="caption-text">
                <span class="text-category">Caribbean Connect 4</a></span>
              </div>            
            </div>
          </a>  
            <a href="https://github.com/gamesmartz/Connect-Four-JS"><img class="skill-sets" style="padding: 10px; width: 60px;" src="assets/img/github-skills.png" alt="Github Skills"></a>
        </div>
      </div>

      <div class="portfolio-piece mix identity" title="Star Trek Calculator">
        <div class="portfolio-wrapper">
          <a href="Calculator-JS-OOP/index"><img src="assets/img/star-trek-calculator.jpg" alt="Star Trek Calculator" style="width: 100%;">
            <div class="caption">
              <div class="caption-text">
                <span class="text-category">Star Trek Calculator</a></span>
              </div>            
            </div>
          </a>  
            <a href="https://github.com/gamesmartz/Calculator-JS-OOP"><img class="skill-sets" style="padding: 10px; width: 60px;" src="assets/img/github-skills.png" alt="Github Skills"></a>
        </div>
      </div>

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