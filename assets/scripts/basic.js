document.addEventListener("DOMContentLoaded", function () {
  const toggleMenuButton = document.querySelector("#toggle_menu");
  console.log("toggle menu button", toggleMenuButton);

  function toggleMenu() {
    console.log("clicked");
    const navLinks = document.querySelector(".nav_links ul");
    console.log("the navlinks==>", navLinks);
    navLinks.classList.toggle("show");
  }

  if (toggleMenuButton) {
    toggleMenuButton.addEventListener("click", toggleMenu);
  }
});
