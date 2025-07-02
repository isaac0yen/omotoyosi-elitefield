<?php
// Set page specific variables
$currentPage = 'contact';
$pageTitle = 'Contact Us | Omotoyosi Elitefield Educational Foundation';
$pageDescription = 'Get in touch with Omotoyosi Elitefield Educational Foundation. Donate, volunteer, or inquire about our programs to help underprivileged children.';

// Include site configuration
require_once 'includes/config.php';
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<main>

  <!-- Want To work -->
  <section class="wantToWork-area mt-10">
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


  <!-- ================ contact section start ================= -->
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm boxed-btn">Send</button>
            </div>
          </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3 class="text-dark">Alabata, Abeokuta</h3>
              <p>Ogun State, Nigeria</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3 class="text-dark"><?php echo $siteConfig['contact_phone']; ?></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3 class="text-dark"><?php echo $siteConfig['contact_email']; ?></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!-- Map Section Begin -->
  <div class="map-section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-tittle text-center mb-5">
            <span>Find Us</span>
            <h2 class="custom-text">Our Location</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7902.401980500805!2d3.3957830244604533!3d7.2341160738122225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103a388d89a8d761%3A0xbe764c8a5ba8ac58!2sAlabata%2C%20Abeokuta!5e0!3m2!1sen!2sng!4v1713725642138!5m2!1sen!2sng" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <!-- Map Section End -->

  <!-- Donation Section Begin -->
  <section class="donation-section section-padding bg-gray-50 py-16">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-tittle text-center mb-5">
            <span>Support Our Cause</span>
            <h2 class="custom-text">Make a Donation</h2>
            <p class="mt-4">
              Your generous donation helps us provide quality education, learning materials, and resources to underprivileged children.
              No contribution is too small, and every amount makes a significant difference in a child's life.
            </p>
          </div>
          <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-center">
              <h3 class="text-2xl font-bold text-gray-800 mb-4">Official Bank Account Details</h3>
              <div class="space-y-2">
                <p class="text-lg font-semibold text-custom-blue">Account Number: <span class="text-gray-700">2046931212</span></p>
                <p class="text-lg font-semibold text-custom-blue">Bank Name: <span class="text-gray-700">First Bank</span></p>
                <p class="text-lg font-semibold text-custom-blue">Account Name: <span class="text-gray-700">Omotoyosi Elitefield Educational Foundation</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Donation Section End -->
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>

</html>