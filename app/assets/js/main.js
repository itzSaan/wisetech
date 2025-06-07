(function () {
  "use strict";
  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector("body");
    const selectHeader = document.querySelector("#header");
    if (
      !selectHeader.classList.contains("scroll-up-sticky") &&
      !selectHeader.classList.contains("sticky-top") &&
      !selectHeader.classList.contains("fixed-top")
    )
      return;
    window.scrollY > 100
      ? selectBody.classList.add("scrolled")
      : selectBody.classList.remove("scrolled");
  }

  document.addEventListener("scroll", toggleScrolled);
  window.addEventListener("load", toggleScrolled);

  // Preloader 
  window.addEventListener("load", () => {
    document.querySelector('#preloader').style.display = 'none';
  });


  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-navmenu-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  
  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll(".navmenu .toggle-dropdown").forEach((navmenu) => {
    console.log("clicked");
    navmenu.addEventListener("click", function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle("active");
      this.parentNode.nextElementSibling.classList.toggle("dropdown-active");
      e.stopImmediatePropagation();
    });
  });
  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  }
  window.addEventListener("load", aosInit);

  // Swiper SLide
  var swiper = new Swiper(".testimonial-swiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



  // Typewriter Effect
  let i = 0;
  let txt = "Discover the Power of Innovation";
  let speed = 100;

  const typeWriter = () => {
    if (i < txt.length) {
      document.querySelector("#heroText").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  };

  let pathName = window.location.pathname;
  if (pathName == '/' || pathName == '/index.php') {
    // setTimeout(() => {
    //   window.addEventListener("load", typeWriter());
    // }, 2000);
    // anime({
    //   targets: '#heroText',
    //   translateY: 0,
    //   opacity: 1
    // });
  }
})();

// window.onload = function() {
  
// };