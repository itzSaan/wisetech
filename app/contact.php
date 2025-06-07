<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php require('include/header.php'); ?>

<body class="index-page">

  <?php require('include/navbar.php'); ?>

  
<?php
if (isset($_GET['status'])) {
  if ($_GET['status'] == "success") {
?>

<div id="successModal" class="modal">
  <div class="modal-content">
    <img src="assets/img/icons/checked.png" alt="Checkmark">
    <h2>Awesome!</h2>
    <p><strong>Thank you!</strong> Your message has been sent successfully. We will get back to you as soon as possible.</p>
    <button id="closeModal">Got it</button>
  </div>
</div>

<?php
  } elseif ($_GET['status'] == "error") {
?>
  <div id="errorModal" class="modal">
  <div class="modal-content">
    <img src="assets/img/icons/x-button.png" alt="Checkmark">
    <h2>Opps!</h2>
    <p><strong>Sorry,</strong> there was an error sending your message. Please try again later.</p>
    <button id="closeModal">Got it</button>
  </div>
</div>

<?php  }
  }
?>

  <main class="main">
    <!-- Hero Section -->
    <section id="" class="page-title">
      <img
        id="heroImage"
        src="assets/img/contact-page.webp"
        alt=""
        data-aos="fade-in" />

      <div class="container">
        <h1 class="">
          Contact Us
        </h1>
        <div class="breadcrumbs">
          <ol class="">
            <li><a href="/">Home</a> </li>
            <li><a href="contact.html">contact</a></li>
          </ol>
        </div>

      </div>
    </section>
    <!-- Page Title Section end -->
    <section class="">
      <div class="container">
        <div class="row page-title-section">
          <p class="section-title" data-aos="fade-up" data-aos-delay="0">Contact Us</p>
          <p class="section-title-back" data-aos="fade-up" data-aos-delay="">Contact Us</p>
          <h2 class="section-heading" data-aos="fade-up" data-aos-delay="200">
            We love to <br />
            Hear from you
          </h2>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="container py-4 ">
        <div class="row justify-content-between gy-5">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
            <h3 class="fs-1">Get In Touch</h3>
            <p class="mb-4">Have a project in mind? Let’s bring your ideas to life! Contact us for expert solutions and support. 🚀</p>

            <div class="mb-4 border-bottom">
              <div class="d-flex align-items-center justify-content-start gap-4 mb-4">
                <div class="icon"><i class="bi-geo-alt"></i></div>
                <div>
                  <p class="mb-0 fw-bold">Address</p>
                  <span class="text-muted">Bhubaneswar, Odisha, India</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-start gap-4 mb-4">
                <div class="icon"><i class="bi-phone"></i></div>
                <div>
                  <p class="mb-0 fw-bold">Phone Number</p>
                  <span class="text-muted">+91 8480310320</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-start gap-4 mb-4">
                <div class="icon"><i class="bi-envelope"></i></div>
                <div>
                  <p class="mb-0 fw-bold">Email</p>
                  <span class="text-muted">mail.wisetech@gmail.com</span>
                </div>
              </div>
            </div>

            <p class="mb-2 fw-bold">Follow Us:</p>
            <div class="social-links d-flex gap-3">
              <a href="https://instagram.com/wisetech_ind" title="Instagram Link"><i class="bi bi-instagram"></i></a>
              <a href="https://linkedin.com/in/wisetech-ind"><i class="bi bi-linkedin" title="LinkedIn Link"></i></a>
              <a href="https://x.com/wisetech_Ind"><i class="bi bi-twitter-x" title="Twitter Link"></i></a>
              <a href="https://facebook.com/wisetechind"><i class="bi bi-facebook" title="Facebook Link"></i></a>
            </div>

          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
              <div class="form shadow">
              <form action="send_email.php" id="contactForm" method="POST">
              <h3 class="fs-2">Send a Message</h3>
              <div class="form-floating mb-2">
                <input type="text" name="name" class="form-control rounded-0 border-0 border-bottom" id="floatingInput" placeholder="name" required>
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control rounded-0 border-0 border-bottom" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-2">
                <textarea class="form-control rounded-0 border-0 border-bottom" placeholder="Leave a comment here" name="message" id="floatingTextarea2" required style="height: 100px"></textarea>
                <label for="floatingTextarea2">Message</label>
              </div>
              <input type="hidden" name="form_type" value="contact">
              <p><small>By submitting, you agree to the processing of your personal data by WiseTech as described in the Privacy Agreement.</small></p>
              <input class="myButton px-5 d-block ms-auto" type="submit" name="submit" value="Submit">
            </form>
              </div>
          </div>
        </div>

        <div class="map mt-5" data-aos="fade-up" data-aos-delay="300">
          <iframe title="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42336.02448765584!2d85.82543505473728!3d20.299801452116586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d2d5170aa5%3A0xfc580e2b68b33fa8!2sBhubaneswar%2C%20Odisha!5e0!3m2!1sen!2sin!4v1728152101657!5m2!1sen!2sin" width="100%" height="400" style="border:0; margin: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>

    </section>

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

  <?php require('include/footer.php'); ?>