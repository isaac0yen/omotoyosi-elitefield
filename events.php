<?php
// Set page specific variables
$currentPage = 'events';
$pageTitle = 'Events | Omotoyosi Elitefield Educational Foundation';
$pageDescription = 'Join us for upcoming events and see our past activities supporting education for underprivileged children in Alabata, Nigeria.';

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
              <h2 class="text-white font-bold">Events</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->
  
  <!--? Events Area Start -->
  <section class="events-area section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-10">
          <div class="section-tittle text-center mb-60">
            <span>Our Events</span>
            <h2 class="custom-text">Join Us In Making A Difference</h2>
            <p class="mt-3">
              Our events bring together volunteers, donors, students, and community members to celebrate education and create positive change.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Upcoming Events -->
      <div class="mb-80">
        <h3 class="text-2xl font-bold mb-6 pb-2 border-b border-gray-200">Upcoming Events</h3>
        <div class="row">
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 h-100">
              <div class="relative">
                <img src="./resources/events/literacy-day.jpg" alt="International Literacy Day Celebration" class="w-full h-60 object-cover">
                <div class="absolute top-4 left-4 bg-custom-orange text-white text-center py-2 px-4 rounded-lg">
                  <p class="text-sm mb-0">SEPT</p>
                  <h3 class="text-2xl font-bold mb-0">8</h3>
                </div>
              </div>
              <div class="p-5">
                <div class="flex items-center mb-3">
                  <i class="fas fa-clock text-custom-orange mr-2"></i>
                  <span>9:00 AM - 2:00 PM</span>
                </div>
                <div class="flex items-center mb-3">
                  <i class="fas fa-map-marker-alt text-custom-orange mr-2"></i>
                  <span>Alabata Community Center</span>
                </div>
                <h4 class="text-xl font-bold mb-3">International Literacy Day Celebration</h4>
                <p class="text-gray-700 mb-4">
                  Join us for a day of reading activities, educational games, and inspirational talks as we celebrate International Literacy Day with our students and the community.
                </p>
                <a href="contact.php" class="inline-block py-2 px-6 bg-custom-blue hover:bg-blue-700 text-white rounded-full transition-colors duration-300">Register</a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 h-100">
              <div class="relative">
                <img src="./resources/events/fundraising.jpg" alt="Annual Fundraising Gala" class="w-full h-60 object-cover">
                <div class="absolute top-4 left-4 bg-custom-orange text-white text-center py-2 px-4 rounded-lg">
                  <p class="text-sm mb-0">OCT</p>
                  <h3 class="text-2xl font-bold mb-0">15</h3>
                </div>
              </div>
              <div class="p-5">
                <div class="flex items-center mb-3">
                  <i class="fas fa-clock text-custom-orange mr-2"></i>
                  <span>6:00 PM - 10:00 PM</span>
                </div>
                <div class="flex items-center mb-3">
                  <i class="fas fa-map-marker-alt text-custom-orange mr-2"></i>
                  <span>Continental Hotel, Abeokuta</span>
                </div>
                <h4 class="text-xl font-bold mb-3">Annual Fundraising Gala</h4>
                <p class="text-gray-700 mb-4">
                  Our annual fundraising gala brings together donors, supporters, and community leaders for an evening of inspiration, entertainment, and giving to support our educational initiatives.
                </p>
                <a href="contact.php" class="inline-block py-2 px-6 bg-custom-blue hover:bg-blue-700 text-white rounded-full transition-colors duration-300">RSVP</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Past Events -->
      <div>
        <h3 class="text-2xl font-bold mb-6 pb-2 border-b border-gray-200">Past Events</h3>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 h-100">
              <img src="./resources/events/teacher-training.jpg" alt="Teacher Training Workshop" class="w-full h-48 object-cover">
              <div class="p-4">
                <div class="text-sm text-gray-500 mb-2">May 12, 2025</div>
                <h4 class="text-lg font-semibold mb-2">Teacher Training Workshop</h4>
                <p class="text-gray-600 text-sm mb-3">
                  Our volunteer teachers participated in a professional development workshop to enhance their teaching skills and learn new methodologies.
                </p>
                <div class="flex items-center">
                  <img src="./resources/Executive Director.jpeg" alt="Event Organizer" class="w-8 h-8 rounded-full mr-2">
                  <span class="text-sm">Organized by <strong>Oladeji Omotoyosi</strong></span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 h-100">
              <img src="./resources/events/childrens-day.jpg" alt="Children's Day Celebration" class="w-full h-48 object-cover">
              <div class="p-4">
                <div class="text-sm text-gray-500 mb-2">May 27, 2025</div>
                <h4 class="text-lg font-semibold mb-2">Children's Day Celebration</h4>
                <p class="text-gray-600 text-sm mb-3">
                  We celebrated Children's Day with our students through games, cultural performances, and educational activities at the community center.
                </p>
                <div class="flex items-center">
                  <img src="./resources/Head of Communications.jpeg" alt="Event Organizer" class="w-8 h-8 rounded-full mr-2">
                  <span class="text-sm">Organized by <strong>Tiyinloluwa Busola</strong></span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 h-100">
              <img src="./resources/events/book-donation.jpg" alt="Book Donation Drive" class="w-full h-48 object-cover">
              <div class="p-4">
                <div class="text-sm text-gray-500 mb-2">April 3, 2025</div>
                <h4 class="text-lg font-semibold mb-2">Book Donation Drive</h4>
                <p class="text-gray-600 text-sm mb-3">
                  We collected over 500 books from generous donors to expand our community library and provide reading materials for our students.
                </p>
                <div class="flex items-center">
                  <img src="./resources/Head of operations.jpeg" alt="Event Organizer" class="w-8 h-8 rounded-full mr-2">
                  <span class="text-sm">Organized by <strong>Habila Samuel</strong></span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 h-100">
              <img src="./resources/events/career-day.jpg" alt="Career Day" class="w-full h-48 object-cover">
              <div class="p-4">
                <div class="text-sm text-gray-500 mb-2">March 15, 2025</div>
                <h4 class="text-lg font-semibold mb-2">Career Day</h4>
                <p class="text-gray-600 text-sm mb-3">
                  Professionals from various fields visited our center to talk to students about different career paths and inspire them to dream big.
                </p>
                <div class="flex items-center">
                  <img src="./resources/HR.jpeg" alt="Event Organizer" class="w-8 h-8 rounded-full mr-2">
                  <span class="text-sm">Organized by <strong>Ale Oluwaseyi</strong></span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 h-100">
              <img src="./resources/events/community-outreach.jpg" alt="Community Outreach" class="w-full h-48 object-cover">
              <div class="p-4">
                <div class="text-sm text-gray-500 mb-2">February 28, 2025</div>
                <h4 class="text-lg font-semibold mb-2">Community Outreach</h4>
                <p class="text-gray-600 text-sm mb-3">
                  Our team visited homes in Alabata to raise awareness about our educational programs and encourage parents to enroll their children.
                </p>
                <div class="flex items-center">
                  <img src="./resources/Volunteer.jpeg" alt="Event Organizer" class="w-8 h-8 rounded-full mr-2">
                  <span class="text-sm">Organized by <strong>Michael Oluwatosin</strong></span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 h-100">
              <img src="./resources/events/graduation.jpg" alt="Student Graduation" class="w-full h-48 object-cover">
              <div class="p-4">
                <div class="text-sm text-gray-500 mb-2">January 15, 2025</div>
                <h4 class="text-lg font-semibold mb-2">Student Graduation</h4>
                <p class="text-gray-600 text-sm mb-3">
                  We celebrated the graduation of 25 students from our basic literacy program with a ceremony attended by students, parents, and community leaders.
                </p>
                <div class="flex items-center">
                  <img src="./resources/Executive Director.jpeg" alt="Event Organizer" class="w-8 h-8 rounded-full mr-2">
                  <span class="text-sm">Organized by <strong>Oladeji Omotoyosi</strong></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Events Area End -->
  
  <!-- Newsletter Section Start -->
  <section class="newsletter-section bg-gray-100 py-16">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div class="text-center mb-5">
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Stay Updated on Our Events</h2>
            <p class="text-gray-600">
              Subscribe to our newsletter to receive updates on upcoming events, volunteer opportunities, and success stories.
            </p>
          </div>
          <div class="newsletter-form">
            <form action="#" method="post" class="flex flex-wrap">
              <div class="w-full md:w-8/12 px-2 mb-3 md:mb-0">
                <input type="email" placeholder="Your email address" class="w-full py-3 px-4 rounded-l-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-custom-blue">
              </div>
              <div class="w-full md:w-4/12 px-2">
                <button type="submit" class="w-full py-3 px-4 bg-custom-orange text-white rounded-r-md hover:bg-orange-600 transition-colors duration-300">
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Newsletter Section End -->
  
  <!-- CTA Section Start -->
  <section class="cta-section py-12">
    <div class="container">
      <div class="bg-custom-blue text-white rounded-lg p-8 relative overflow-hidden">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-7 position-relative z-10">
            <h2 class="text-3xl font-bold mb-3">Want to help organize an event?</h2>
            <p class="mb-0 text-gray-100">
              If you have ideas for events or would like to help organize one, we'd love to hear from you! 
              Our volunteers play a crucial role in planning and executing successful events.
            </p>
          </div>
          <div class="col-lg-4 col-md-5 text-md-right mt-4 mt-md-0 position-relative z-10">
            <a href="contact.php" class="inline-block py-3 px-6 bg-white text-custom-blue font-semibold rounded-full hover:bg-gray-100 transition-colors duration-300">
              Contact Us
            </a>
          </div>
        </div>
        <!-- Background decor elements -->
        <div class="absolute top-0 right-0 w-40 h-40 bg-blue-500 rounded-full opacity-20 transform translate-x-20 -translate-y-20"></div>
        <div class="absolute bottom-0 left-0 w-40 h-40 bg-blue-500 rounded-full opacity-20 transform -translate-x-20 translate-y-20"></div>
      </div>
    </div>
  </section>
  <!-- CTA Section End -->
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
