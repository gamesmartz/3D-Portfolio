<?php //Scroll Spy to Highlight Menu Items based on Page Location - Bootstrap ?>
<body style="position: relative; " data-spy="scroll" data-target=".navbar" data-offset="50">

<div id="navbar-target" class="container-fluid index-nav navbar">
    <ul style="    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;" class="nav hidden-nav d-flex align-items-center justify-content-end nav-bar-shrink">
      <li class="nav-item">
        <a class="nav-link  active" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#portfolio">Portfolios</a>
      </li>
      <li class="nav-item far-right-nav-margin">
        <a class="nav-link " href="#contact">Contact</a>
      </li>
    </ul>
  </div>