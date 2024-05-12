// Navigation bar scroll changing

let navbar = document.querySelector(".navbar");
let nLinks = document.querySelectorAll(".n-link");

window.addEventListener("scroll", function () {
   if (this.window.scrollY > 100) {
      navbar.style.backgroundColor = "rgba(255,255,255,0.9)";
      navbar.style.boxShadow = "10px 10px 15px rgba(0, 0, 0, 0.15)";
      nLinks.forEach((n) => {
         n.style.color = "#222";
      });
   } else if (this.window.scrollY < 100) {
      navbar.style.backgroundColor = "transparent";
      navbar.style.boxShadow = "none";
      nLinks.forEach((n) => {
         n.style.color = "#fff";
      });
   }
});
