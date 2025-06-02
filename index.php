<?php
// Set page specific variables
$currentPage = 'home';
$pageTitle = 'Omotoyosi Elitefield Educational Foundation';
$pageDescription = 'Providing underprivileged children with access to quality education in Alabata, Abeokuta, Ogun State, Nigeria.';
$includeBlogScripts = true;

// Include site configuration
require_once 'includes/config.php';
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- Main Content -->
<main>
  <!-- slider Area Start-->
  <div class="slider-area">
    <div class="slider-active">
      <!-- Single Slider -->
      <div class="single-slider slider-height d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
              <div class="hero__caption">
                <h1 data-animation="fadeInUp" data-delay=".6s" class="text-white mt-5 pt-5">
                  Giving underprivileged children the gift of a <br />
                  Better Life
                </h1>
                <p data-animation="fadeInUp" data-delay=".8s" class="text-white">
                  At the core of our mission lies a deep commitment to
                  equality, resilience, and the unwavering belief that every
                  child deserves a chance at a life shaped by quality
                  education.
                </p>
                <!-- Hero-btn -->
                <div class="hero__btn">
                  <a href="contact.php" class="btn hero-btn mb-10 custom-button" data-animation="fadeInLeft" data-delay=".8s">Donate</a>
                  <a href="tel:<?php echo $siteConfig['contact_phone']; ?>" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                    <i class="flaticon-null text-white"></i>
                    <p class="text-white"><?php echo $siteConfig['contact_phone']; ?></p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider Area End-->

  <!--? Services Area Start -->
  <div class="service-area section-padding30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
          <!-- Section Tittle -->
          <div class="section-tittle text-center mb-80">
            <span class="custom-text">What we are doing?</span>
            <h2 class="custom-text">
              Providing underprivileged children with access to quality
              "Education".
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat text-center mb-50">
            <div class="cat-icon">
              <span class="ti-shield"><i class="ri-graduation-cap-line"></i></span>
            </div>
            <div class="cat-cap">
              <h5>Basic Education</h5>
              <p>
                We are essentially committed to giving underprivileged
                children access to basic literacy and numeracy skills to
                enable children in low-income communities read, write and do
                basic arithmetics
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat active text-center mb-50">
            <div class="cat-icon">
              <span class="flaticon-think"><i class="ri-bard-fill"></i></span>
            </div>
            <div class="cat-cap">
              <h5>Exposed Learning</h5>
              <p>
                In order to change the mindset and perspectives of our
                children towards education and with the way they view life
                resulting by the challenges they face living in the least
                rural area of Alabata Abeokuta Ogun state. We organize end
                of the year excursions for our kids to see beyond their
                environment.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat text-center mb-50">
            <div class="cat-icon">
              <span class="flaticon-gear"><i class="ri-service-line"></i></span>
            </div>
            <div class="cat-cap">
              <h5>Strong Support</h5>
              <p>
                Over the years we've had passionate people who have
                selflessly put in their time and resources in making sure
                the leaders of tommorow have access to basic education.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Services Area End -->

  <!--? About Law Start-->
  <section class="about-low-area section-padding2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-10">
          <div class="about-caption mb-50">
            <!-- Section Tittle -->
            <div class="section-tittle mb-35">
              <span>About our foundation</span>
              <h2 class="custom-text">
                Passionately dedicated to transforming lives through<br />
                Education.
              </h2>
            </div>
            <p>
              Omotoyosi Elitefield Educational Foundation was established in 2018 with the mission to provide quality education to underprivileged children in Alabata, Abeokuta, Ogun State. We believe that education is the most powerful tool to break the cycle of poverty and create lasting change.
            </p>
            <p>
              Through our dedicated team of volunteers and supporters, we've been able to impact over 200 children by providing educational materials, mentorship, and creating a nurturing learning environment that fosters growth and development.
            </p>
          </div>
          <a href="about.php" class="btn">About US</a>
        </div>
        <div class="col-lg-6 col-md-12">
          <!-- about-img -->
          <div class="about-img">
            <div class="about-back-img">
              <img src="./resources/about2.jpeg" class="img-fluid" style="max-width: 500px; border-radius: 3%" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Law End-->

  <!--? Team Area Start -->
  <div class="team-area pt-160 pb-160">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
          <!-- Section Tittle -->
          <div class="section-tittle section-tittle2 text-center mb-70">
            <span>What we are doing</span>
            <h2 class="custom-text">Our Expert Volunteer Always ready</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-team mb-30">
            <div class="team-img">
              <img src="./resources/Executive Director.jpeg" alt="Executive Director" />
              <!-- Team Social -->
              <ul class="team-social">
                <li>
                  <a href="https://www.instagram.com/omotoyosi_oladeji" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/oladeji-omotoyosi" target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="https://x.com/OmotoyosiOlade1" target="_blank"><i class="ri-twitter-x-fill"></i></a>
                </li>
              </ul>
            </div>
            <div class="team-caption">
              <h3>Oladeji Omotoyosi</h3>
              <p>Executive Director</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-team mb-30">
            <div class="team-img">
              <img src="./resources/Head of operations.jpeg" alt="Head of Operations" />
              <!-- Team Social -->
              <ul class="team-social">
                <li>
                  <a href="https://www.instagram.com/samuelhabilah" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/habila-d-908060111" target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
            <div class="team-caption">
              <h3>Habila Samuel</h3>
              <p>Head of Operations</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-team mb-30">
            <div class="team-img">
              <img src="./resources/HR.jpeg" alt="Human Resource" />
              <!-- Team Social -->
              <ul class="team-social">
                <li>
                  <a href="https://www.instagram.com/oluwaseyi_ale" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/oluwaseyi-ale-786080123" target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
            <div class="team-caption">
              <h3>Ale Oluwaseyi</h3>
              <p>Human Resource</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-team mb-30">
            <div class="team-img">
              <img src="./resources/Head of Communications.jpeg" alt="Head of Communications" />
              <!-- Team Social -->
              <ul class="team-social">
                <li>
                  <a href="https://www.instagram.com/_bussiegold" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/tiyinloluwa-ajala" target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
            <div class="team-caption">
              <h3>Tiyinloluwa Busola Ajala</h3>
              <p>Head of Communications</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-team mb-30">
            <div class="team-img">
              <img src="./resources/Volunteer.jpeg" alt="Volunteer" />
              <!-- Team Social -->
              <ul class="team-social">
                <li>
                  <a href="https://www.instagram.com/michaeloluwatosin681" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/michael-oluwatosin-040748288" target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
            <div class="team-caption">
              <h3>Adeyomoye Michael Oluwatosin</h3>
              <p>Volunteer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Area End -->

  <!-- Want To work -->
  <section class="wantToWork-area">
    <div class="container">
      <div class="wants-wrapper w-padding2 section-bg" data-background="resources/world.jpg">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-5 col-lg-9 col-md-8">
            <div class="wantToWork-caption wantToWork-caption2">
              <h2>Lets help the leaders of tomorrow!</h2>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4">
            <a href="contact.php" class="btn white-btn f-right sm-left">Become A Volunteer</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Want To work End -->

  <!--? Testimonial Start -->
  <div class="testimonial-area testimonial-padding">
    <div class="container">
      <!-- Testimonial contents -->
      <div class="row d-flex justify-content-center">
        <div class="col-xl-8 col-lg-8 col-md-10">
          <div class="h1-testimonial-active dot-style">
            <!-- Single Testimonial -->
            <div class="single-testimonial text-center">
              <div class="testimonial-caption">
                <!-- founder -->
                <div class="testimonial-founder">
                  <div class="founder-img mb-40">
                    <img src="/resources/quote.jpg" style="width: 200px;height:200px;" />
                    <span>Oladeji Omotoyosi</span>
                    <p>Executive Directior</p>
                  </div>
                </div>
                <div class="testimonial-top-cap">
                  <p>
                    “I am at an age where I just want to be fit and healthy
                    our bodies are our responsibility! So start caring for
                    your body and it will care for you. Eat clean it will
                    care for you and workout hard.”
                  </p>
                </div>
              </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial text-center">
              <div class="testimonial-caption">
                <!-- founder -->
                <div class="testimonial-founder">
                  <div class="founder-img mb-40">
                    <img src="assets/img/gallery/testimonial.png" alt="" style="width: 200px;height:200px;"/>
                    <span>Margaret Lawson</span>
                    <p>Creative Director</p>
                  </div>
                </div>
                <div class="testimonial-top-cap">
                  <p>
                    “I am at an age where I just want to be fit and healthy
                    our bodies are our responsibility! So start caring for
                    your body and it will care for you. Eat clean it will
                    care for you and workout hard.”
                  </p>
                </div>
              </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial text-center">
              <div class="testimonial-caption">
                <!-- founder -->
                <div class="testimonial-founder">
                  <div class="founder-img mb-40">
                    <img src="assets/img/gallery/testimonial.png" alt="" style="width: 200px;height:200px;"/>
                    <span>Margaret Lawson</span>
                    <p>Creative Director</p>
                  </div>
                </div>
                <div class="testimonial-top-cap">
                  <p>
                    “I am at an age where I just want to be fit and healthy
                    our bodies are our responsibility! So start caring for
                    your body and it will care for you. Eat clean it will
                    care for you and workout hard.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

  <!--? Blog Area Start -->
  <section class="home-blog-area section-padding30">
    <div class="container">
      <!-- Section Tittle -->
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
          <div class="section-tittle text-center mb-90">
            <span>Our recent blog</span>
            <h2>Latest News from our recent blog</h2>
          </div>
        </div>
      </div>

    <!-- Blog posts will be loaded dynamically via JavaScript -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="blog-posts-container">
      <?php
      $recentPosts = getRecentBlogPosts(2);
      foreach ($recentPosts as $post):
          $dateParts = explode(' ', $post['date']);
          $day = $dateParts[0];
          $month = substr($dateParts[1], 0, 3);
      ?>
          <div class="w-full">
              <div class="mb-8">
                  <div class="relative">
                      <div class="overflow-hidden rounded-lg">
                          <img src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="w-full h-auto" />
                          <!-- Blog date -->
                          <div class="absolute top-4 left-4 bg-white px-3 py-2 rounded-lg text-center">
                              <span class="block text-xl font-bold"><?php echo $day; ?></span>
                              <p class="text-sm"><?php echo $month; ?></p>
                          </div>
                      </div>
                      <div class="p-4">
                          <p class="text-gray-500"><?php echo $post['position']; ?></p>
                          <h3 class="text-xl font-bold mt-2">
                              <a href="blog_details.php?slug=<?php echo $post['slug']; ?>" class="hover:text-blue-600">
                                  <?php echo $post['title']; ?>
                              </a>
                          </h3>
                          <p class="text-gray-600 mt-2"><?php echo $post['excerpt']; ?></p>
                          <a href="blog_details.php?slug=<?php echo $post['slug']; ?>" class="inline-block mt-4 text-blue-600 hover:underline">
                              Read More
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      <?php endforeach; ?>
    </div>
  </div>
  </section>
  <!-- Blog Area End -->

  <!--? Count Down Start -->
  <div class="count-down-area pt-25 section-bg" data-background="assets/img/gallery/section_bg02.png">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="count-down-wrapper">
            <div class="row justify-content-between">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Counter Up -->
                <div class="single-counter text-center">
                  <span class="counter color-green">6,200</span>
                  <span class="plus">+</span>
                  <p class="color-green">Donation</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Counter Up -->
                <div class="single-counter text-center">
                  <span class="counter color-green">80</span>
                  <span class="plus">+</span>
                  <p class="color-green">Fund Raised</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Counter Up -->
                <div class="single-counter text-center">
                  <span class="counter color-green">256</span>
                  <span class="plus">+</span>
                  <p class="color-green">Donation</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Counter Up -->
                <div class="single-counter text-center">
                  <span class="counter color-green">256</span>
                  <span class="plus">+</span>
                  <p class="color-green">Donation</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Count Down End -->
</main>
<?php include 'includes/scripts.php'; ?>

<?php include 'includes/footer.php'; ?>
