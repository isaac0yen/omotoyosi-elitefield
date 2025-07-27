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
                  <a class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
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
            <h2 class="custom-text">Our Team Members</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        // Include team members data from config
        include_once 'includes/config.php';
        
        // Display all team members
        foreach ($teamMembers as $index => $member) :
          // Create a new row every 4 members
          if ($index > 0 && $index % 4 === 0) :
            echo '</div><div class="row">';
          endif;
        ?>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-team mb-30">
            <div class="team-img">
              <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['alt']; ?>" />
              <!-- Team Social -->
              <?php if (!empty($member['social_media'])) : ?>
              <ul class="team-social">
                <?php foreach ($member['social_media'] as $social) : ?>
                <li>
                  <a href="<?php echo $social['url']; ?>" target="_blank"><i class="<?php echo $social['icon']; ?>"></i></a>
                </li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </div>
            <div class="team-caption">
              <h3><?php echo $member['name']; ?></h3>
              <p><?php echo $member['position']; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
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
            <a href="https://forms.gle/duZ5grMWtzeUcJkJ9" class="btn white-btn f-right sm-left">Become A Volunteer</a>
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
                  <div class="founder-img mb-30">
                    <img src="/resources/toyosi.jpeg" style="width: 200px;height:200px;" />
                    <span>Oladeji Omotoyosi</span>
                    <p>Executive Directior</p>
                  </div>
                </div>
                <div class="testimonial-top-cap">
                  <p>
                    “I am committed to giving children more than just access to quality education, we build character, nurture purpose, and empower them to rise as lights in their generation.”
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

</main>
<?php include 'includes/scripts.php'; ?>

<?php include 'includes/footer.php'; ?>