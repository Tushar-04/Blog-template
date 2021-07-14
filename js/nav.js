var navbar = document.querySelector(".nav-bar");
var slidebar = document.querySelector(".nav-links");
var sticky = navbar.offsetTop;
window.onscroll = function () {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    slidebar.style.top = "10vh";
    
  } else {
    navbar.classList.remove("sticky");
    slidebar.style.top = "30vh";
  }
};

function navSlide() {
  const nav = document.querySelector('.nav-links');
  nav.classList.toggle("nav-active");
    
};
