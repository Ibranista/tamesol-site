const images = [
  "assets/images/tamesol_portfolio.png",
  "assets/images/tamesol_portfolio.png",
  "assets/images/tamesol_portfolio.png",
  "assets/images/tamesol_portfolio.png",
  "assets/images/tamesol_portfolio.png",
  "assets/images/tamesol_portfolio.png",
  "assets/images/tamesol_portfolio.png",
  "assets/images/tamesol_portfolio.png",
  "assets/images/tamesol_portfolio.png",
];
let xPos = 0;

gsap
  .timeline()
  .set(".ring", { rotationY: 180, cursor: "grab" }) // set initial rotationY
  .set(".hero_carousel_img", {
    rotateY: (i) => i * -36,
    transformOrigin: "50% 50% 500px",
    z: -500,
    backgroundImage: (i) => `url(${images[i]})`, // Use images array
    backgroundPosition: (i) => getBgPos(i),
    backfaceVisibility: "hidden",
  })
  .from(".hero_carousel_img", {
    duration: 1.5,
    y: 200,
    opacity: 0,
    stagger: 0.1,
    ease: "expo",
  })
  .add(() => {
    $(".hero_carousel_img").on("mouseenter", (e) => {
      let current = e.currentTarget;
      gsap.to(".hero_carousel_img", {
        opacity: (i, t) => (t == current ? 1 : 0.5),
        ease: "power3",
      });
    });
    $(".hero_carousel_img").on("mouseleave", (e) => {
      gsap.to(".hero_carousel_img", { opacity: 1, ease: "power2.inOut" });
    });
  }, "-=0.5");

$(window).on("mousedown touchstart", dragStart);
$(window).on("mouseup touchend", dragEnd);

function dragStart(e) {
  if (e.touches) e.clientX = e.touches[0].clientX;
  xPos = Math.round(e.clientX);
  gsap.set(".ring", { cursor: "grabbing" });
  $(window).on("mousemove touchmove", drag);
}

function drag(e) {
  if (e.touches) e.clientX = e.touches[0].clientX;

  gsap.to(".ring", {
    rotationY: "-=" + ((Math.round(e.clientX) - xPos) % 360),
    onUpdate: () => {
      gsap.set(".hero_carousel_img", {
        backgroundPosition: (i) => getBgPos(i),
      });
    },
  });

  xPos = Math.round(e.clientX);
}

function dragEnd(e) {
  $(window).off("mousemove touchmove", drag);
  gsap.set(".ring", { cursor: "grab" });
}

function getBgPos(i) {
  //returns the background-position string to create parallax movement in each image
  return (
    100 -
    (gsap.utils.wrap(
      0,
      360,
      gsap.getProperty(".ring", "rotationY") - 180 - i * 36
    ) /
      360) *
      500 +
    "px 0px"
  );
}
