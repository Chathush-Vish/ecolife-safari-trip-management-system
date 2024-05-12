// change hero image slide

let heroBg = document.querySelector(".hero");

const slideImgs = [
   {
      img: "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/slides/slide-1.jpg)",
   },
   {
      img: "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/slides/slide-3.jpg)",
   },
   {
      img: "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/slides/slide-4.jpg)",
   },
];

let currentSlide = 1;

function slideMove() {
   let item = slideImgs[currentSlide];
   if (currentSlide === 2) {
      currentSlide = 0;
   } else {
      currentSlide++;
   }
   heroBg.style.backgroundImage = item.img;
}

let slider;
slider = setInterval(slideMove, 5000);

// Admin dashboard

// tab-menu
let tabLinks = document.querySelectorAll(".tab-link");
let tab_1 = document.querySelector(".tab-1");
let tab_2 = document.querySelector(".tab-2");
let tab_3 = document.querySelector(".tab-3");
//sections
let sec = document.querySelectorAll(".sec");
let sec_1 = document.querySelector(".sec-1");
let sec_2 = document.querySelector(".sec-2");
let sec_3 = document.querySelector(".sec-3");

tab_1.addEventListener("click", function () {
   tab_1.classList.add("active");
   tab_2.classList.remove("active");
   tab_3.classList.remove("active");
   sec_1.classList.add("active");
   sec_2.classList.remove("active");
   sec_3.classList.remove("active");
});

tab_2.addEventListener("click", function () {
   tab_2.classList.add("active");
   tab_1.classList.remove("active");
   tab_3.classList.remove("active");
   sec_2.classList.add("active");
   sec_1.classList.remove("active");
   sec_3.classList.remove("active");
});

tab_3.addEventListener("click", function () {
   tab_3.classList.add("active");
   tab_1.classList.remove("active");
   tab_2.classList.remove("active");
   sec_3.classList.add("active");
   sec_1.classList.remove("active");
   sec_2.classList.remove("active");
});
