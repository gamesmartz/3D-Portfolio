<?php 
  include ('modules/head.php')
?>
  <title>Front End Designer / Developer - Matt Norkaitis</title>

</head>

<?php
  include ('modules/navbar-portfolios.php');
?>

<section class="page-section"><?php //section start ?>

  <div class="container text-center wow fadeIn"><?php //container start ?>
    
    <h2 class="thick-bold-raleway portfolio-titles">Front End Design / Developer</h2>
    <hr class="colored">  

    <div class="position-relative"><?php //portfolio pieces container start ?>

    <div class="chevrons-container"><?php //chevron start ?>
      <a href="photoshop-wizardry">
        <i class="chevron-right large material-icons" style="font-size: 80px">chevron_right</i>
      </a>
      <a href="3d-artist">
        <i class="chevron-left large material-icons" style="font-size: 80px">chevron_left</i>
      </a>      
    </div><?php //chevron end ?>

      <div class="portfolio-piece mix identity" title="GameSmartz">
        <div class="portfolio-wrapper">
          <a href="https://gamesmartz.com"><img src="assets/img/gamesmartz.jpg" alt="GameSmartz" style="width: 100%;">
            <div class="caption">
              <div class="caption-text">
                <div class="text-category">GameSmartz</div>
                <div class="text-category">Educational Software for Kids</div>
                <div class="text-category">Responsible for Everything: Funding, Project Concept, Project Management, Graphics, Front End Dev, Back End Dev</div>
              </div>            
            </div>
          </a>  
            <a href="https://github.com/gamesmartz"><img class="skill-sets" style="padding: 10px; width: 60px;" src="assets/img/github-skills.png" alt="Github Skills"></a>
        </div>
      </div>

      <div class="portfolio-piece mix identity" title="Matts Memory Match Mashup">
        <div class="portfolio-wrapper">
          <a href="Memory-Match-JS-OOP/index"><img src="assets/img/memory-match.jpg" alt="Matts Memory Match Mashup" style="width: 100%;">
            <div class="caption">
              <div class="caption-text">
                <div class="text-category">Memory Match Art Portfolio</div>
                <div class="text-category">Responsible for Everything: Graphics, Javascript, CSS Layout</div>
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
                <div class="text-category">Caribbean Connect 4</div>
                <div class="text-category">Responsible for: Graphics, Some Javascript, All CSS Layout</div>
              </div>            
            </div>
          </a>  
            <a href="https://github.com/gamesmartz/Connect-Four-JS"><img class="skill-sets" style="padding: 10px; width: 60px;" src="assets/img/github-skills.png" alt="Github Skills"></a>
        </div>
      </div>



      <div class="portfolio-piece mix identity" title="Furnishing America">
        <div class="portfolio-wrapper">
          <a href="https://www.furnishingamerica.com/"><img src="assets/img/furnishingamerica.jpg" alt="Furnishing America" style="width: 100%;">
            <div class="caption">
              <div class="caption-text">   
                <div class="text-category">Furnishing America</div>
                <div class="text-category">Lifetime - 2.8 Million Unique Users</div>
                <div class="text-category">Lifetime - 18.3 Million Page Views</div>
                <div class="text-category">Lifetime - SEO Rank #1 in Many Local Furniture Categories</div>
                <div class="text-category">Responsible for: Front End Dev, Back End Dev, Graphics, SEO</div>
              </div>            
            </div>
          </a>  
            <a href="https://github.com/gamesmartz"><img class="skill-sets" style="padding: 10px; width: 60px;" src="assets/img/github-skills.png" alt="Github Skills"></a>
        </div>
      </div>

      <div style="margin-top:50px;">
        <h5>Photoshop - HTML - CSS - Javascript - PHP - Mysql - SEO</h5>
        <div>
          <a href="https://www.adobe.com/products"><img class="skill-sets" src="assets/img/photoshop-icon.png" alt="Photoshop"></a>
          <a href="https://en.wikipedia.org/wiki/HTML"><img class="skill-sets" src="assets/img/html-logo.png" alt="HTML"></a>
          <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets"><img class="skill-sets" src="assets/img/css-logo.png" alt="CSS"></a>
          <a href="https://en.wikipedia.org/wiki/JavaScript"><img class="skill-sets" src="assets/img/javascript-logo.png" alt="Javascript"></a>
          <a href="https://en.wikipedia.org/wiki/PHP"><img class="skill-sets" src="assets/img//php-mysql.png" alt="PHP / Mysql"></a>
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