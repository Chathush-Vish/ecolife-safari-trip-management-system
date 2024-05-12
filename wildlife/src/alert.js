// alert message closing

let alertClose = document.querySelector(".success-alert");

alertClose.addEventListener("click", function (e) {
   if (e.target.id === "alert-close") {
      alertClose.style.display = "none";
   }
});
