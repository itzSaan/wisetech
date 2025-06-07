<?php require('include/header.php');?>
<!-- Service Page CSS -->
 <link rel="stylesheet" href="assets/css/service-page.css" />

  <body class="index-page">

  <?php require('include/navbar.php');?>

  <?php
if (isset($_GET['status'])) {
  if ($_GET['status'] == "success") {
?>

<div id="successModal" class="modal">
  <div class="modal-content">
    <img src="assets/img/icons/checked.png" width="80" height="80" alt="Checkmark">
    <h2>Awesome!</h2>
    <p><strong>Thank you for your quote request!</strong><br>We are reviewing your information and will send you a personalized quote shortly.</p>
    <button id="closeModal">Got it</button>
  </div>
</div>

<?php
  } elseif ($_GET['status'] == "error") {
?>
  <div id="errorModal" class="modal">
  <div class="modal-content">
    <img src="assets/img/icons/x-button.png" width="80" height="80" alt="Checkmark">
    <h2>Opps!</h2>
    <p><strong>Sorry,</strong> We were unable to process your quote request at this time. Please try again later.</p>
    <button id="closeModal">Got it</button>
  </div>
</div>

<?php  }
  }
?>

<?php
if (isset($_GET['status'])) {
  if ($_GET['status'] == "subscribe_success") {
?>

<div id="successModal" class="modal">
  <div class="modal-content">
    <img src="assets/img/icons/checked.png" width="80" height="80" alt="Checkmark">
    <h2>Awesome!</h2>
    <p><strong>Thank you for subscribing!</strong> <br>You will now receive our latest updates and news.</p>
    <button id="closeModal">Got it</button>
  </div>
</div>

<?php
  } elseif ($_GET['status'] == "subscribe_error") {
?>
  <div id="errorModal" class="modal">
  <div class="modal-content">
    <img src="assets/img/icons/x-button.png" width="80" height="80" alt="Checkmark">
    <h2>Opps!</h2>
    <p><strong>Sorry,</strong> <br> There was an error with your subscription. Please try again.</p>
    <button id="closeModal">Got it</button>
  </div>
</div>

<?php  }
  }
?>

    <main class="main">
      <!-- Page Title Section -->
      <section id="" class="page-title">
        <img
          id="pageImage"
          src="assets/img/service-page.webp"
          alt=""
          data-aos="fade-in"
        />
        <div class="container">          
            <h1 class="">
              Our Services
            </h1>
            <div class="breadcrumbs">
              <ol class="">
                <li><a href="/">Home</a> </li>
                <li><a href="service.html">Services</a></li>
              </ol>
            </div>          
        </div>
      </section>
<!-- Page Title Section end -->

<section class="">
    <div class="container">
      <div class="row page-title-section" data-aos="fade-up">
        <p class="section-title">Our Services</p>
        <p class="section-title-back">Our Services</p>
        <h2 class="section-heading">
          Tailored Solutions <br />
          for Your Needs
        </h2>
        <!-- <p>We offer a range of solutions to meet your business needs</p> -->
      </div>
    </div>
  </section>

  
  <!-- SERVICES SECTION -->
  <section class="services-section" id="services">
    <div class="container">
      <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-lg-3 col-6">
          <div class="card service-card" data-aos="fade-up" data-aos-delay="0">
            <img src="./assets/img/services/website.gif" width="120" height="auto" class="img-fluid" alt="">
            <!-- <i class="bi bi-laptop"></i> -->
            <h5>Website Designing</h5>
            <p>Beautiful, responsive, and user-friendly websites.</p>
          </div>
        </div>
        <!-- Service 2 -->
        <div class="col-lg-3 col-6">
          <div class="card service-card" data-aos="fade-up" data-aos-delay="50">
            <!-- <i class="bi bi-code-slash"></i> -->
            <img src="./assets/img/services/applications.gif" width="120" height="auto" class="img-fluid" alt="">
            <h5>Web App Development</h5>
            <p>Custom web applications for seamless workflows.</p>
          </div>
        </div>
        <!-- Service 3 -->
        <div class="col-lg-3 col-6">
          <div class="card service-card" data-aos="fade-up" data-aos-delay="100"">
            <!-- <i class="bi bi-phone"></i> -->
            <img src="./assets/img/services/mobile-apps.gif" width="120" height="auto" class="img-fluid" alt="">
            <h5>Mobile App Development</h5>
            <p>Engaging, high-performance mobile applications.</p>
          </div>
        </div>
        <!-- Service 4 -->
        <div class="col-lg-3 col-6">
          <div class="card service-card" data-aos="fade-up" data-aos-delay="150">
            <img src="./assets/img/services/strategic-consulting.gif" width="120" height="auto" class="img-fluid" alt="">
            <!-- <i class="bi bi-briefcase"></i> -->
            <h5>Business Solutions</h5>
            <p>Software solutions to streamline your operations.</p>
          </div>
        </div>
        <!-- Service 5 -->
        <div class="col-lg-3 col-6">
          <div class="card service-card" data-aos="fade-up" data-aos-delay="200">
            <!-- <i class="bi bi-palette"></i> -->
            <img src="./assets/img/services/ui.gif" width="120" height="auto" class="img-fluid" alt="">
            <h5>UI/UX Design</h5>
            <p>Stunning interfaces with optimal user experience.</p>
          </div>
        </div>
        <!-- Service 6 -->
        <div class="col-lg-3 col-6">
          <div class="card service-card" data-aos="fade-up" data-aos-delay="250">
            <!-- <i class="bi bi-cart"></i> -->
            <img src="./assets/img/services/online-store.gif" width="120" height="auto" class="img-fluid" alt="">
            <h5>E-commerce Solutions</h5>
            <p>Online stores with secure payment integrations.</p>
          </div>
        </div>
        <!-- Service 7 -->
        <div class="col-lg-3 col-6">
          <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
            <!-- <i class="bi bi-bar-chart"></i> -->
            <img src="./assets/img/services/seo.gif" width="120" height="auto" class="img-fluid" alt="">
            <h5>SEO & Marketing</h5>
            <p>Boost your online presence and reach more customers.</p>
          </div>
        </div>
        <!-- Service 8 -->
        <div class="col-lg-3 col-6">
          <div class="card service-card" data-aos="fade-up" data-aos-delay="350">
            <!-- <i class="bi bi-wrench"></i> -->
            <img src="./assets/img/services/helpdesk.gif" width="120" height="auto" class="img-fluid" alt="">
            <h5>Support & Maintenance</h5>
            <p>Keep your systems updated and running smoothly.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SERVICES SECTION -->

  <!-- WHY TRUST US SECTION -->
  <section class="trust-section">
    <div class="container">
      <p class="section-title">Why Trust Us</p>
      <h3 class="mb-5 text-white section-heading" data-aos="fade-up" data-aos-delay="50">Why Trust Us for Your Business?</h3>
      <div class="row g-4">
        <!-- Trust Card 1 -->
        <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="0">
          <div class="card trust-card">
            <!-- <i class="bi bi-shield-lock"></i> -->
            <img src="./assets/img/icons/security.png" width="80"  class="img-fluid mx-auto mb-5"  alt="">
            <h6>Website Security</h6>
            <p>We prioritize security to protect your data.</p>
          </div>
        </div>
        <!-- Trust Card 2 -->
        <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card trust-card">
            <!-- <i class="bi bi-lightning-charge"></i> -->
            <img src="./assets/img/icons/good-feedback.png" width="80" class="img-fluid mx-auto mb-5"  alt="">
            <h6>Uptime Guarantee</h6>
            <p>Reliable hosting and quick support for minimal downtime.</p>
          </div>
        </div>
        <!-- Trust Card 3 -->
        <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card trust-card">
            <!-- <i class="bi bi-people"></i> -->
            <img src="./assets/img/icons/team.png" width="80" class="img-fluid mx-auto mb-5"  alt="">
            <h6>Experienced Team</h6>
            <p>Skilled professionals to deliver top-notch solutions.</p>
          </div>
        </div>
        <!-- Trust Card 4 -->
        <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card trust-card">
            <!-- <i class="bi bi-check-circle"></i> -->
            <img src="./assets/img/icons/trust.png" width="80" class="img-fluid mx-auto mb-5"  alt="">
            <h6>Trusted Partner</h6>
            <p>We build long-term relationships with our clients.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END WHY TRUST US SECTION -->

  <!-- STATS / EXPERIENCE SECTION -->
  <section class="stats-section">
    <div class="container">
      <h3 class="section-heading" data-aos="fade-up" data-aos-delay="50">We Have Completed 3+ Years<br>of Business Experience</h3>
      <div class="row mt-5 gy-4" data-aos="fade-up" data-aos-delay="150">
        <div class="col-sm-6 col-md-3 stat-item">
          <!-- <i class="bi bi-briefcase fs-1"></i> -->
          <img src="./assets/img/icons/suitcase.png" width="80" class="mb-3" alt="">
          <h4>500+</h4>
          <p>Projects</p>
        </div>
        <div class="col-sm-6 col-md-3 stat-item">
          <!-- <i class="bi bi-people fs-1"></i> -->
          <img src="./assets/img/icons/relationship.png" width="80" class="mb-3" alt="">
          <h4>100+</h4>
          <p>Clients</p>
        </div>
        <div class="col-sm-6 col-md-3 stat-item">
          <!-- <i class="bi bi-code fs-1"></i> -->
          <img src="./assets/img/icons/rocket-launch.png" width="80" class="mb-3" alt="">
          <h4>2021</h4>
          <p>Started</p>
        </div>
        <div class="col-sm-6 col-md-3 stat-item">
          <!-- <i class="bi bi-briefcase fs-1"></i> -->
          <img src="./assets/img/icons/stats.png" width="80" class="mb-3" alt="">
          <h4>2025</h4>
          <p>Growing</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END STATS SECTION -->

  <!-- CTA SECTION -->
  <section class="cta-section position-relative">
    <div class="cta-overlay"></div>
    <div class="cta-content container" data-aos="fade-up" data-aos-delay="100">
      <h3 class="mb-3 text-white section-heading" >Ready to Scale Your Business<br>with WiseTech?</h3>
      <p class="mb-4">
        We provide tailor-made digital solutions to meet your unique goals.
      </p>
      <a href="#quote" class="myButton myButton-lg mx-auto">
        <span>Get Started</span>
      </a>
    </div>
  </section>
  <!-- END CTA SECTION -->

  <!-- GET QUOTE SECTION -->
  <section class="quote-section" id="quote">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-md-6">
          <h3 class="section-heading" data-aos="fade-up" data-aos-delay="100">Get Your <span class="text-accent">Free Quote</span><br>Today!</h3>
          <p class="mb-4" data-aos="fade-up" data-aos-delay="100">
            Fill out the form and let us know how we can help your business thrive.
          </p>
          <ul data-aos="fade-up" data-aos-delay="200">
            <li><i class="bi bi-check-circle text-accent fs-5 me-2"></i>Fast & Secure Services</li>
            <li><i class="bi bi-check-circle text-accent fs-5 me-2"></i>24/7 Customer Support</li>
            <li><i class="bi bi-check-circle text-accent fs-5 me-2"></i>Custom Solutions for Every Industry</li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="card quote-form shadow rounded-5 border-0" data-aos="fade-up" data-aos-delay="300">
                  
          <form action="forms/process_quote.php" method="POST">
            <div class="form-floating mb-2">
              <input type="text" class="form-control rounded-0 border-0 border-bottom" id="floatingInput" placeholder="name" name="name" required>
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-2">
              <input type="email" class="form-control rounded-0 border-0 border-bottom" id="floatingInput" placeholder="name@example.com" name="email" required>
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
              <input type="text" class="form-control rounded-0 border-0 border-bottom" id="floatingInput" placeholder="Phone" name="phone" required>
              <label for="floatingInput">Phone</label>
            </div>
            <div class="form-floating mb-2">
              <textarea class="form-control rounded-0 border-0 border-bottom" placeholder="Leave a comment here" id="floatingTextarea2" name="message" required style="height: 100px"></textarea>
              <label for="floatingTextarea2">Message</label>
            </div>
            <input type="hidden" name="form_type" value="quote">
            <p><small>By submitting, you agree to the processing of your personal data by WiseTech as described in the Privacy Agreement.</small></p>
            <input class="myButton px-5 d-block ms-auto" type="submit" name="submit" value="Submit">
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END GET QUOTE SECTION -->

  <!-- FAQ SECTION -->
  <section class="faq-section">
    <div class="container">
      <h3 class="section-heading" data-aos="fade-up" data-aos-delay="50">Question? <span class="text-accent">Look Here.</span></h3>
      <div class="accordion mt-4" id="faqAccordion" data-aos="fade-up" data-aos-delay="150">
        <!-- FAQ 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
              What services do you offer?
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            aria-labelledby="headingOne"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              We offer website design, web apps, Android apps, and other business solutions.
            </div>
          </div>
        </div>
        <!-- FAQ 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >
              How can I contact your support team?
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              You can email us at mail.wisetech@gmail.com or call us at +91848 031 0320.
            </div>
          </div>
        </div>
        <!-- FAQ 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree"
            >
              Do you offer ongoing maintenance?
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="headingThree"
            data-bs-parent="#faqAccordion"
          >
            <div class="accordion-body">
              Yes, we provide support and maintenance packages to ensure your systems run smoothly.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END FAQ SECTION -->

  <!-- SUBSCRIBE SECTION -->
  <section class="subscribe-section">
    <div class="container" data-aos="fade-up" data-aos-delay="50">
      <h3 class="section-heading">Subscribe for <span class="text-accent"> Special IT<br>Deals & Get a Special Offer</span></h3>
      <p class="mb-4">Stay updated with the latest news and offers from WiseTech</p>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="forms/process_subscribe.php" method="POST">
            <div class="input-group p-1 bg-white">
              <input
              type="email"
              class="form-control p-3"
              name="subscribe_email"
              placeholder="Enter your email address"
              required
              />
              <i class="bi bi-envelope-at fs-5"></i>
              <input type="hidden" name="form_type" value="subscribe">
              <button class="myButton" name="submit" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END SUBSCRIBE SECTION -->

      </main>

      <script>
// Get the modal
var smodal = document.getElementById("successModal");
var emodal = document.getElementById("errorModal");

let modal = document.querySelector('.modal')
// Get the button that opens the modal
var form = document.getElementById("contactForm");

// Get the button that closes the modal
var closeModalBtn = document.getElementById("closeModal");

// // When the user submits the form, open the modal 
// form.addEventListener('submit', function(event) {
//   event.preventDefault(); // Prevent default form submission
//   modal.style.display = "block";
// });

// When the user clicks on Got it, close the modal
closeModalBtn.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

      <?php require('include/footer.php');?>