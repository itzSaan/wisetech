<?php
$pageUrl = $_SERVER['PHP_SELF'];
?>

<header id="header" class="header fixed-top">
  <div class="branding position-relative d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a
        href="/"
        class="logo d-flex align-items-center me-aut me-xl-0">
        <img src="assets/img/logo/wisetech-dark.svg" height="26" width="auto" class="img-flui" alt="WiseTech">
        <!-- <h1>wisetech</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="<?= ($pageUrl == '/index.php' || $pageUrl == '/') ? 'active' : '' ?>">Home</a></li>
          <li><a href="service.php" class="<?= ($pageUrl == '/service.php' || $pageUrl == 'service.php') ? 'active' : '' ?>">Services</a></li>
          <li><a href="about.php" class="<?= ($pageUrl == '/about.php' || $pageUrl == 'about.php') ? 'active' : '' ?>">About</a></li>
          <li><a href="blog.php" class="<?= ($pageUrl == '/blog.php' || $pageUrl == 'blog.php') ? 'active' : '' ?>">Blog</a></li>
          <li><a href="contact.php" class="<?= ($pageUrl == '/contact.php' || $pageUrl == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
        </ul>        
      </nav>
      <a class="myButton d-none d-lg-inline" href="contact.php">Get a Quote</a>

      <nav id="mobileNavmenu" class="mobile-navmenu">
        <ul>
          <li><a href="/" class="<?= ($pageUrl == '/index.php' || $pageUrl == '/') ? 'active' : '' ?>">Home</a></li>
          <li><a href="service.php" class="<?= ($pageUrl == '/service.php' || $pageUrl == 'service.php') ? 'active' : '' ?>">Services</a></li>
          <li><a href="about.php" class="<?= ($pageUrl == '/about.php' || $pageUrl == 'about.php') ? 'active' : '' ?>">About</a></li>
          <li><a href="blog.php" class="<?= ($pageUrl == '/blog.php' || $pageUrl == 'blog.php') ? 'active' : '' ?>">Blog</a></li>
          <li><a href="contact.php" class="<?= ($pageUrl == '/contact.php' || $pageUrl == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
        </ul>
        <a class="myButton" href="contact.php">Get a Quote</a>
      </nav>
      
      <i class="mobile-nav-toggle d-lg-none bi bi-list"></i>
      
    </div>
  </div>
</header>