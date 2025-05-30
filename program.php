<?php
// Set page specific variables
$currentPage = 'program';
$pageTitle = 'Our Programs | Omotoyosi Elitefield Educational Foundation';
$pageDescription = 'Learn about our educational programs serving underprivileged children in Alabata, Abeokuta, Nigeria.';

// Include site configuration
require_once 'includes/config.php';
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<main>
  <!--? Hero Start -->
  <div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap hero-cap2 pt-20 text-center">
              <h2 class="text-white">Our Programs</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->
  
  <!--? programs Area Start -->
  <section class="service-area section-padding30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
          <!-- Section Title -->
          <div class="section-tittle text-center mb-80">
            <span>What we are doing</span>
            <h2 class="custom-text">Programs that are changing lives</h2>
            <p class="mt-3">
              Our programs are designed to address the educational needs of underprivileged children in Alabata, 
              providing them with opportunities to learn, grow, and build a better future.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Programs List -->
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat text-center mb-50">
            <div class="cat-icon">
              <span class="flaticon-null"><i class="fas fa-book-open fa-3x text-custom-orange"></i></span>
            </div>
            <div class="cat-cap">
              <h5><a href="#literacy-program">Basic Literacy Program</a></h5>
              <p>
                We focus on providing foundational education to children who have limited or no access to formal education. 
                Our basic literacy program ensures that every child can read, write, and perform basic arithmetic operations.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat text-center mb-50">
            <div class="cat-icon">
              <span class="flaticon-null"><i class="fas fa-laptop fa-3x text-custom-orange"></i></span>
            </div>
            <div class="cat-cap">
              <h5><a href="#digital-literacy">Digital Literacy Initiative</a></h5>
              <p>
                In today's digital world, computer literacy is essential. Our digital literacy program introduces children to computers and basic digital skills, preparing them for the modern workforce.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat text-center mb-50">
            <div class="cat-icon">
              <span class="flaticon-null"><i class="fas fa-chalkboard-teacher fa-3x text-custom-orange"></i></span>
            </div>
            <div class="cat-cap">
              <h5><a href="#mentorship">Mentorship Program</a></h5>
              <p>
                Our mentorship program pairs children with positive role models who provide guidance, support, and encouragement. Mentors help children develop confidence and set goals for their future.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat text-center mb-50">
            <div class="cat-icon">
              <span class="flaticon-null"><i class="fas fa-shapes fa-3x text-custom-orange"></i></span>
            </div>
            <div class="cat-cap">
              <h5><a href="#creative-arts">Creative Arts Program</a></h5>
              <p>
                Our creative arts program encourages self-expression and creativity through various art forms including drawing, painting, music, and drama. This program helps children develop their unique talents and build confidence.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat text-center mb-50">
            <div class="cat-icon">
              <span class="flaticon-null"><i class="fas fa-plane fa-3x text-custom-orange"></i></span>
            </div>
            <div class="cat-cap">
              <h5><a href="#field-trips">Educational Excursions</a></h5>
              <p>
                We organize field trips to museums, historical sites, and other educational venues to broaden children's horizons and expose them to new experiences beyond their immediate environment.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-cat text-center mb-50">
            <div class="cat-icon">
              <span class="flaticon-null"><i class="fas fa-heartbeat fa-3x text-custom-orange"></i></span>
            </div>
            <div class="cat-cap">
              <h5><a href="#health-wellness">Health and Wellness</a></h5>
              <p>
                We believe that a healthy body supports a healthy mind. Our health and wellness program provides basic health education, nutrition guidance, and access to essential health resources.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Program Area End -->
  
  <!-- Program Details Section Start -->
  <section class="about-low-area section-padding2 bg-light">
    <div class="container">
      <div id="literacy-program" class="row mb-5 pt-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="about-img">
            <img src="./resources/literacy-program.jpg" alt="Basic Literacy Program" class="img-fluid rounded shadow-sm">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-caption">
            <div class="section-tittle mb-35">
              <span>Our Programs</span>
              <h2 class="custom-text">Basic Literacy Program</h2>
            </div>
            <p class="mb-3">
              Our Basic Literacy Program is the foundation of our educational initiatives. We focus on developing essential reading, writing, and numeracy skills in children who have limited or no access to formal education.
            </p>
            <p class="mb-3">
              Using innovative teaching methods and culturally relevant materials, we create a supportive learning environment where children can build their literacy skills at their own pace.
            </p>
            <h4 class="mt-4 mb-3">Program Highlights:</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Phonics-based reading instruction</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Interactive writing activities</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Hands-on numeracy exercises</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Regular assessment and progress tracking</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Provision of essential learning materials</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div id="digital-literacy" class="row mb-5 pt-5">
        <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
          <div class="about-img">
            <img src="./resources/digital-literacy.jpg" alt="Digital Literacy Initiative" class="img-fluid rounded shadow-sm">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="about-caption">
            <div class="section-tittle mb-35">
              <span>Our Programs</span>
              <h2 class="custom-text">Digital Literacy Initiative</h2>
            </div>
            <p class="mb-3">
              In today's increasingly digital world, computer literacy is essential for future success. Our Digital Literacy Initiative introduces children to computers and basic digital skills, bridging the digital divide that often impacts underserved communities.
            </p>
            <p class="mb-3">
              Through hands-on training and interactive projects, children learn valuable digital skills that will prepare them for future educational and career opportunities.
            </p>
            <h4 class="mt-4 mb-3">Program Components:</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Introduction to computer hardware and software</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Basic typing and document creation skills</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Internet safety and responsible online behavior</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Introduction to educational software and resources</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Creative digital projects</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div id="mentorship" class="row mb-5 pt-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="about-img">
            <img src="./resources/mentorship.jpg" alt="Mentorship Program" class="img-fluid rounded shadow-sm">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-caption">
            <div class="section-tittle mb-35">
              <span>Our Programs</span>
              <h2 class="custom-text">Mentorship Program</h2>
            </div>
            <p class="mb-3">
              Our Mentorship Program pairs children with positive role models who provide guidance, support, and encouragement. These mentors help children develop confidence, set goals, and navigate challenges.
            </p>
            <p class="mb-3">
              The program creates meaningful relationships that inspire children to pursue their dreams and reach their full potential. Many of our mentors are community leaders, professionals, and university students who are committed to making a difference.
            </p>
            <h4 class="mt-4 mb-3">Program Benefits:</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> One-on-one guidance and support</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Academic assistance and homework help</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Career exploration and goal setting</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Character development and life skills</li>
              <li class="mb-2"><i class="fas fa-check-circle text-custom-orange mr-2"></i> Increased self-confidence and motivation</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Program Details Section End -->
  
  <!-- Impact Section Start -->
  <section class="count-down-area pt-25 section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-10">
          <div class="section-tittle text-center mb-60">
            <span>Our Impact</span>
            <h2 class="custom-text">Making A Difference Through Education</h2>
            <p class="mt-3">
              Since our foundation in 2018, we've worked tirelessly to create positive change in the lives of underprivileged children in Alabata. 
              Here's a glimpse of our impact through the years.
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="count-down-wrapper">
            <div class="row justify-content-between">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Counter Up -->
                <div class="single-counter text-center">
                  <span class="counter color-green">250</span>
                  <span class="plus">+</span>
                  <p class="color-green">Children Impacted</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Counter Up -->
                <div class="single-counter text-center">
                  <span class="counter color-green">40</span>
                  <span class="plus">+</span>
                  <p class="color-green">Dedicated Volunteers</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Counter Up -->
                <div class="single-counter text-center">
                  <span class="counter color-green">12</span>
                  <span class="plus">+</span>
                  <p class="color-green">Community Events</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Counter Up -->
                <div class="single-counter text-center">
                  <span class="counter color-green">5</span>
                  <span class="plus">+</span>
                  <p class="color-green">Years of Service</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Impact Section End -->
  
  <!-- Testimonial Start -->
  <div class="testimonial-area testimonial-padding section-bg" data-background="assets/img/gallery/section_bg04.png">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xl-8 col-lg-8 col-md-10">
          <!-- Section Tittle -->
          <div class="section-tittle section-tittle2 mb-60">
            <span>Testimonials</span>
            <h2 class="custom-text">What Our Community Says</h2>
          </div> 
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-11 col-md-11">
          <div class="h1-testimonial-active">
            <!-- Single Testimonial -->
            <div class="single-testimonial">
              <div class="testimonial-caption">
                <div class="testimonial-top-cap">
                  <p>"Before joining Omotoyosi Elitefield, I couldn't read or write well. Now I can read my textbooks and even help my younger siblings with their homework. I want to be a doctor when I grow up, and now I believe I can do it."</p>
                </div>
                <!-- founder -->
                <div class="testimonial-founder d-flex align-items-center">
                  <div class="founder-text">
                    <span>Aisha, 12 years old</span>
                    <p>Student</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
              <div class="testimonial-caption">
                <div class="testimonial-top-cap">
                  <p>"As a parent, I've seen a tremendous change in my child since he started attending the foundation's programs. His confidence has improved, and he now has a passion for learning. I'm grateful for the dedicated teachers and volunteers who make this possible."</p>
                </div>
                <!-- founder -->
                <div class="testimonial-founder d-flex align-items-center">
                  <div class="founder-text">
                    <span>Mrs. Adeyemi</span>
                    <p>Parent</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
              <div class="testimonial-caption">
                <div class="testimonial-top-cap">
                  <p>"Volunteering with Omotoyosi Elitefield has been one of the most rewarding experiences of my life. Seeing the children's faces light up when they master a new concept or skill is priceless. This foundation is truly making a difference in our community."</p>
                </div>
                <!-- founder -->
                <div class="testimonial-founder d-flex align-items-center">
                  <div class="founder-text">
                    <span>Emmanuel Oladipo</span>
                    <p>Volunteer Teacher</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->
  
  <!-- Want To work -->
  <section class="wantToWork-area">
    <div class="container">
      <div class="wants-wrapper w-padding2 section-bg" data-background="resources/world.jpg">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-5 col-lg-9 col-md-8">
            <div class="wantToWork-caption wantToWork-caption2">
              <h2>Help us reach more children!</h2>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4">
            <a href="contact.php" class="btn white-btn f-right sm-left">Donate Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Want To work End -->
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
