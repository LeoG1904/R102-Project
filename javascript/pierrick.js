const arrowDown = document.querySelector(".fa-angle-double-down");
const header = document.querySelector("header");
const paragrapheHeader = document.querySelectorAll(".menu ul li a");
const title = document.querySelector(".titleRobotino");

// SCROLL PAR BLOCS



var doc = window.document,
  context = doc.querySelector(".js-loop"),
  disableScroll = false,
  scrollHeight = 0,
  scrollPos = 0,
  i = 0;

arrowDown.addEventListener("click", () => {
  setScrollPos(context.clientHeight);
});

function getScrollPos() {
  return (context.pageYOffset || context.scrollTop) - (context.clientTop || 0);
}

function setScrollPos(pos) {
  context.scrollTop = pos;
}

function reCalc() {
  scrollPos = getScrollPos();
  scrollHeight = context.scrollHeight;

  if (scrollPos <= 0) {
    setScrollPos(1);
  }
}

function bck(precedent, suivant, color) {
  if (
    scrollPos >= context.clientHeight * precedent - 50 &&
    scrollPos <= context.clientHeight * suivant
  ) {
    header.style.backgroundColor = color; // "#E74C3C"
    paragrapheHeader.forEach((e) => {
      e.style.color = "#ffffff";
    });
  }
}



function init() {
  reCalc();

  context.addEventListener(
    "scroll",
    function () {
      window.requestAnimationFrame(scrollUpdate);
    },
    false
  );

  window.addEventListener(
    "resize",
    function () {
      window.requestAnimationFrame(reCalc);
    },
    false
  );
}

if (document.readyState !== "loading") {
  init();
} else {
  doc.addEventListener("DOMContentLoaded", init, false);
}

// Animation arrivée

const titreRobotino = document.querySelector(".titleRobotino");
window.addEventListener("load", () => {
  const TL = gsap.timeline({ paused: true }, 0.3);
  TL.from(paragrapheHeader, 0.3, {
    opacity: 0,
    stagger: 0.1,
    right: 25,
    ease: "sine",
  })
    .from(titreRobotino, 0.5, { opacity: 0, top: 15, stagger: 0.1 }, "1")
    .from(arrowDown, 0.5, { opacity: 0, top: 5 }, "1");

  TL.play();
});

let observer = new IntersectionObserver(
  (observable) => {
    observable.forEach((observable) => {
      if (observable.intersectionRatio > 0.5) {
        console.log("Intersection");
      }
    });
  },
  {
    threshold: [0.5],
  }
);


