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
  <!--? Hero Start -->
  <div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap hero-cap2 pt-20 text-center">
              <h2 class="text-white">Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->
  
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
  
  <!-- Volunteer Section Begin -->
  <section class="volunteer-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-tittle text-center mb-5">
            <span>Make A Difference</span>
            <h2 class="custom-text">Become a Volunteer</h2>
            <p class="mt-4">
              Join our team of dedicated volunteers who are making a real difference in the lives of underprivileged children. 
              Whether you can contribute your time, skills, or resources, there's a place for you in our community.
            </p>
          </div>
          <div class="volunteer-form bg-gray-50 p-5 rounded-lg shadow-sm">
            <form action="volunteer_process.php" method="post" id="volunteerForm">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                    <label for="fullName" class="form-label font-weight-bold">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Your full name" required>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                    <label for="email" class="form-label font-weight-bold">Email Address</label>
                    <input type="email" class="form-control" id="volunteerEmail" name="email" placeholder="Your email address" required>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                    <label for="phone" class="form-label font-weight-bold">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone number" required>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                    <label for="occupation" class="form-label font-weight-bold">Occupation</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Your current occupation">
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <div class="form-group">
                    <label for="skills" class="form-label font-weight-bold">Skills & Expertise</label>
                    <select class="form-control" id="skills" name="skills">
                      <option value="" selected disabled>Select your area of expertise</option>
                      <option value="Teaching">Teaching</option>
                      <option value="Mentoring">Mentoring</option>
                      <option value="Administration">Administration</option>
                      <option value="Event Planning">Event Planning</option>
                      <option value="Fundraising">Fundraising</option>
                      <option value="Marketing">Marketing & Communications</option>
                      <option value="IT">Information Technology</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <div class="form-group">
                    <label for="availability" class="form-label font-weight-bold">Availability</label>
                    <select class="form-control" id="availability" name="availability">
                      <option value="" selected disabled>When are you available?</option>
                      <option value="Weekdays">Weekdays</option>
                      <option value="Weekends">Weekends</option>
                      <option value="Both">Both Weekdays and Weekends</option>
                      <option value="Flexible">Flexible Schedule</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <div class="form-group">
                    <label for="message" class="form-label font-weight-bold">Why do you want to volunteer?</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us about yourself and why you'd like to volunteer with us"></textarea>
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg px-5 py-3 bg-custom-orange border-0 rounded-pill">Submit Application</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Volunteer Section End -->
  
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
          <div class="donation-options">
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="donation-card bg-white p-4 text-center rounded-lg shadow-sm h-100">
                  <div class="donation-amount mb-3">
                    <h3 class="font-weight-bold text-custom-orange">₦5,000</h3>
                  </div>
                  <div class="donation-impact mb-3">
                    <p>Provides school supplies for one child</p>
                  </div>
                  <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">Donate Now</a>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="donation-card bg-white p-4 text-center rounded-lg shadow-sm h-100 position-relative">
                  <div class="popular-badge position-absolute" style="top: -10px; right: 10px; background-color: #FF6B35; color: white; padding: 5px 10px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                    Popular
                  </div>
                  <div class="donation-amount mb-3">
                    <h3 class="font-weight-bold text-custom-blue">₦20,000</h3>
                  </div>
                  <div class="donation-impact mb-3">
                    <p>Sponsors a child's education for one month</p>
                  </div>
                  <a href="#" class="btn btn-primary rounded-pill px-4 py-2 bg-custom-orange border-0">Donate Now</a>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="donation-card bg-white p-4 text-center rounded-lg shadow-sm h-100">
                  <div class="donation-amount mb-3">
                    <h3 class="font-weight-bold text-custom-orange">₦50,000</h3>
                  </div>
                  <div class="donation-impact mb-3">
                    <p>Provides educational materials for a classroom</p>
                  </div>
                  <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">Donate Now</a>
                </div>
              </div>
            </div>
            <div class="custom-donation mt-5 text-center">
              <p class="mb-4 font-weight-bold">Would you like to donate a different amount?</p>
              <a href="#" class="btn btn-lg btn-primary rounded-pill px-5 py-3 bg-custom-blue border-0">Custom Donation</a>
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
