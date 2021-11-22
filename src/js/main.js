AOS.init();

jQuery(window).scroll(function () {
  if (jQuery(window).scrollTop() > 300) {
    jQuery("#go-to-top").addClass("show");
  } else {
    jQuery("#go-to-top").removeClass("show");
  }
});

jQuery("#go-to-top").on("click", function (e) {
  e.preventDefault();
  jQuery("html, body").animate({ scrollTop: 0 }, "300");
});

jQuery(document).ready(function () {
  jQuery(".hamburger").click(function () {
    jQuery(".hamburger").toggleClass(" is-active");
    jQuery(".main-menu").slideToggle("fast");
  });
});

window.onscroll = function () {
  myFunction();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    jQuery("#spacer").css("marginTop", "62px");
  } else {
    navbar.classList.remove("sticky");
    jQuery("#spacer").css("marginTop", "0px");
  }
}

jQuery(".navbar-nav>li>a").on("click", function () {
  jQuery(".navbar-collapse").collapse("hide");
  if (jQuery(window).width() < 767) {
    jQuery(".navbar-toggler").removeClass("opened");
    jQuery(".hamburger").removeClass("is-active");
  }
});

jQuery(document).ready(function () {
  jQuery(".navbar-toggler").click(function () {
    this.classList.toggle("opened");
  });
});

const btn = document.querySelector(".toggle-show");
const checkBox = document.querySelector(".show-less");
let f = false;
btn.addEventListener("click", function (e) {
  e.preventDefault();
  f = !f;
  if (f) {
    checkBox.classList.add("show-more");
    btn.innerHTML = "Zwiń";
  } else {
    checkBox.classList.remove("show-more");
    // acordeon.style.height = "180px";
    btn.innerHTML = "Rozwiń";
  }
});
