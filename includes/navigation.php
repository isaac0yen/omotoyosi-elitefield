<header>
  <!-- Header Start -->
  <div class="header-area">
    <div class="main-header">
      <div class="header-bottom header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-xl-2 col-lg-2">
              <div class="logo">
                <a href="index.php"><img src="./resources/logo_text.png" alt="Omotoyosi Elitefield Educational Foundation Nav Bar Logo" class="logo-dimension" /></a>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10">
              <div class="menu-wrapper d-flex align-items-center justify-content-end">
                <!-- Main-menu -->
                <div class="main-menu d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li><a href="index.php" class="<?php echo $currentPage == 'home' ? 'active' : ''; ?>">Home</a></li>
                      <li><a href="about.php" class="<?php echo $currentPage == 'about' ? 'active' : ''; ?>">About</a></li>
                      <!-- <li><a href="program.php" class="<?php echo $currentPage == 'program' ? 'active' : ''; ?>">Latest Causes</a></li> -->
                      <!-- <li><a href="events.php" class="<?php echo $currentPage == 'events' ? 'active' : ''; ?>">Social Events</a></li> -->
                      <li>
                        <a href="blog.php" class="<?php echo $currentPage == 'blog' || $currentPage == 'blog_details' ? 'active' : ''; ?>">Blog</a>
                      </li>
                      <li><a href="contact.php" class="<?php echo $currentPage == 'contact' ? 'active' : ''; ?>">Contact</a></li>
                    </ul>
                  </nav>
                </div>
                <!-- Header-btn -->
                <div class="header-right-btn d-none d-lg-block ml-20">
                  <a href="contact.php" class="btn header-btn custom-button">Donate</a>
                </div>
              </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->
</header>
