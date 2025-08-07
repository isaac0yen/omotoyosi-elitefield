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

  <!-- Swiper CSS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Image Carousel Section -->
  <div class="image-carousel-area section-padding30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
          <!-- Section Title -->
          <div class="section-tittle text-center mb-70">
            <span>Our Impact</span>
            <h2 class="custom-text">Fully funded scholarship program & Volunteers</h2>
            <p class="mt-3">
              Browse through our gallery showcasing our educational initiatives including classroom sessions, 
              educational excursions, and community outreach programs. We're grateful for partners like 
              <strong>Kids Alpha Nigeria</strong> who sponsor our children and <strong>AIESEC</strong> 
              volunteers who contribute their teaching expertise.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="swiper image-carousel">
            <div class="swiper-wrapper">
              <?php
              $carouselDir = './resources/carousel/';
              $images = glob($carouselDir . '*.{jpeg,jpg,png}', GLOB_BRACE);

              if (!empty($images)) {
                foreach ($images as $image) {
                  echo '<div class="swiper-slide">';
                  echo '<img src="' . $image . '" alt="Foundation Activities" class="img-fluid rounded shadow">';
                  echo '</div>';
                }
              } else {
                echo '<div class="swiper-slide">';
                echo '<div class="alert alert-info">No images found in carousel directory</div>';
                echo '</div>';
              }
              ?>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination dots -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Swiper JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const swiper = new Swiper('.image-carousel', {
        // Basic settings
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,

        // Autoplay
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        // Pagination dots
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },

        // Responsive breakpoints
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 10
          },
          600: {
            slidesPerView: 2,
            spaceBetween: 15
          },
          1000: {
            slidesPerView: 3,
            spaceBetween: 20
          }
        }
      });

      console.log('Swiper carousel initialized successfully');
    });
  </script>

  <!-- Enhanced CSS for carousel styling -->
  <style>
    .image-carousel-area {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      position: relative;
      padding: 100px 0;
    }

    .image-carousel-area::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23000" opacity="0.02"/><circle cx="75" cy="75" r="1" fill="%23000" opacity="0.02"/><circle cx="50" cy="10" r="0.5" fill="%23000" opacity="0.03"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
      pointer-events: none;
    }

    .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 400px;
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .swiper-slide:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transition: transform 0.4s ease;
      border-radius: 15px;
      display: block;
    }

    .swiper-slide:hover img {
      transform: scale(1.08);
    }

    /* Add overlay effect for better text readability if needed */
    .swiper-slide::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.1) 100%);
      z-index: 1;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .swiper-slide:hover::before {
      opacity: 1;
    }

    /* Custom navigation buttons */
    .swiper-button-next,
    .swiper-button-prev {
      background: rgba(231, 120, 46, 0.95);
      width: 55px;
      height: 55px;
      border-radius: 50%;
      color: white;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
      background: rgba(231, 120, 46, 1);
      transform: scale(1.15);
      box-shadow: 0 8px 25px rgba(231, 120, 46, 0.4);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
      font-size: 18px;
      font-weight: bold;
    }

    /* Custom pagination */
    .swiper-pagination {
      margin-top: 40px;
      position: static;
    }

    .swiper-pagination-bullet {
      width: 16px;
      height: 16px;
      margin: 0 10px;
      background: rgba(231, 120, 46, 0.3);
      transition: all 0.3s ease;
      border: 2px solid transparent;
    }

    .swiper-pagination-bullet-active {
      background: rgb(231, 120, 46);
      transform: scale(1.3);
      border-color: rgba(231, 120, 46, 0.3);
    }

    .swiper-pagination-bullet:hover {
      background: rgba(231, 120, 46, 0.7);
      transform: scale(1.1);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {

      .swiper-button-next,
      .swiper-button-prev {
        width: 45px;
        height: 45px;
      }

      .swiper-button-next::after,
      .swiper-button-prev::after {
        font-size: 16px;
      }

      .swiper-slide {
        height: 350px;
      }

      .image-carousel-area {
        padding: 60px 0;
      }
    }

    @media (max-width: 480px) {
      .swiper-slide {
        height: 300px;
      }

      .section-tittle p {
        font-size: 14px;
      }
    }
  </style>

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
                  <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-48 sm:h-56 md:h-64 object-cover transition-transform duration-300 hover:scale-105" loading="lazy" />
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