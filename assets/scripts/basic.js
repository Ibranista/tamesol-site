document.addEventListener("DOMContentLoaded", function () {
  jQuery(document).ready(function ($) {
    $('.toggle-text').on('click', function () {
        var $this = $(this);
        var $parent = $this.closest('.about_desc');
        
        if ($this.text() === 'Read More') {
            $parent.find('.short-text').hide();
            $parent.find('.full-text').show();
            $this.text('Read Less');
        } else {
            $parent.find('.short-text').show();
            $parent.find('.full-text').hide();
            $this.text('Read More');
        }
    });
});

  const scrollTopBtn = document.getElementById("scrollTopBtn");

  scrollTopBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const toggleMenuButton = document.querySelector("#toggle_menu");
  const navLinks = document.querySelector(".nav_links ul");
  const ExploreEventsButton = document.querySelector(
    ".explore_events_btn_wrapper"
  );

  function toggleMenu() {
    navLinks.classList.toggle("show");
    if (navLinks.classList.contains("show")) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  }

  function handleClickOutside(event) {
    if (
      !navLinks.contains(event.target) &&
      !toggleMenuButton.contains(event.target)
    ) {
      navLinks.classList.remove("show");
      document.body.style.overflow = "";
    }
  }

  if (toggleMenuButton) {
    toggleMenuButton.addEventListener("click", toggleMenu);
  }

  document.addEventListener("click", handleClickOutside);

  const paragraphs = document.querySelectorAll(".affected");
  const typingSpeed = 40;
  const pauseBetweenParagraphs = 500;

  function typeWriter(text, element, index = 0) {
    if (index < text.length) {
      element.innerHTML += text.charAt(index);
      setTimeout(() => typeWriter(text, element, index + 1), typingSpeed);
    }
  }

  function displayParagraphsSequentially(paragraphs, i = 0) {
    if (i < paragraphs.length) {
      const text = paragraphs[i].textContent;
      paragraphs[i].innerHTML = "";
      paragraphs[i].style.display = "block";
      typeWriter(text, paragraphs[i]);
      setTimeout(
        () => displayParagraphsSequentially(paragraphs, i + 1),
        text.length * typingSpeed + pauseBetweenParagraphs
      );
    }
  }

  paragraphs.forEach((p) => (p.style.display = "none"));
  displayParagraphsSequentially(paragraphs);
  if (ExploreEventsButton) {
    ExploreEventsButton.addEventListener("click", function (event) {
      event.preventDefault();
      const targetElement = document.querySelector("#event_section_wrapper");
      const offset = 100;

      const elementPosition =
        targetElement.getBoundingClientRect().top + window.pageYOffset - offset;

      window.scrollTo({
        top: elementPosition,
        behavior: "smooth",
      });
    });
  }

  document.querySelectorAll(".event_card_wrapper").forEach((card, index) => {
    card.style.zIndex = index + 1;
  });
});

window.addEventListener("scroll", () => {
  const nav = document.querySelector("nav.main-nav-wrapper");
  if (window.scrollY > 100) {
    nav.classList.add("scrolled");
  } else {
    nav.classList.remove("scrolled");
  }
});
