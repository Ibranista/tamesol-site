document.addEventListener("DOMContentLoaded", function () {
  const toggleMenuButton = document.querySelector("#toggle_menu");
  const navLinks = document.querySelector(".nav_links ul");
  navLinks.classList.toggle("show");

  function toggleMenu() {
    navLinks.classList.toggle("show");
  }

  function handleClickOutside(event) {
    if (
      !navLinks.contains(event.target) &&
      !toggleMenuButton.contains(event.target)
    ) {
      navLinks.classList.remove("show");
    }
  }

  if (toggleMenuButton) {
    toggleMenuButton.addEventListener("click", toggleMenu);
  }

  document.addEventListener("click", handleClickOutside);
});
