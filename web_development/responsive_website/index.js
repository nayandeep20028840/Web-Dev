const mobile_nav = document.querySelector(".mobile-navbar-btn"); // declaring variables
const nav_header = document.querySelector(".header");

const toggleNavbar = () => {
  nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar()); 