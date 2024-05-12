<style>
   /* Colors */
:root {
   --primaryGreen: #008455;
   --primaryBlack: #111111;
   --seconderyCream: #f5dea8;
   --lightGreen: #b5e48c;
   --mainWhite: #ffffff;
   --seconderyText: #2f3e46;
}

/* Globel styles */
* {
   padding: 0;
   margin: 0;
   box-sizing: border-box;
   transition: all 0.2s ease-in-out;
}

body {
   color: var(--primaryBlack);
   font-family: "Poppins", sans-serif;
}

a {
   text-decoration: none;
   color: var(--primaryBlack);
}

ul {
   list-style: none;
}

button {
   display: flex;
   align-items: center;
   justify-content: center;
   font-weight: 500;
   font-size: 1.1em;
   cursor: pointer;
}

input:focus {
   outline: none;
}

textarea:focus {
   outline: none;
}

h1,
h2 {
   transition: all ease-in-out 0.2s;
}

/* style classes */
.flex {
   display: flex;
   align-items: start;
}

.center {
   display: flex;
   align-items: center;
   justify-content: center;
}

.between {
   display: flex;
   align-items: center;
   justify-content: space-between;
}

.between-y {
   display: flex;
   width: 100%;
   flex-direction: column;
   align-items: start;
   justify-content: space-between;
}

.column {
   display: flex;
   flex-direction: column;
}

.g-1 {
   gap: 10px;
}

.g-2 {
   gap: 20px;
}

.g-3 {
   gap: 30px;
}

.g-4 {
   gap: 40px;
}

.g-5 {
   gap: 50px;
}

/* footer */
footer {
   background-color: var(--primaryGreen);
}

footer a {
   font-size: 19px;
   font-weight: 300;
   color: #e3e4e7 !important;
}

footer a:hover {
   color: var(--seconderyCream);
}

.footer-top {
   padding: 70px 150px 0 150px;
   display: flex;
   align-items: start;
   justify-content: space-between;
   padding-bottom: 30px;
}

.footer-top .logo h3 {
   font-size: 25px;
}

.footer-top .social-icons img {
   width: 30px;
   cursor: pointer;
}

.footer-top input {
   border: 1px solid #e3e4e7;
   padding: 10px 20px;
   width: 300px;
   height: 40px;
   border-radius: 3px 0 0 3px;
   background-color: #e3e4e7;
}

.footer-top button {
   border: 1px solid #222;
   padding: 10px 20px;
   font-size: 16px;
   height: 40px;
   background-color: var(--primaryBlack);
   color: #fff;
   border-radius: 0 3px 3px 0;
}

.footer-bottom {
   padding: 10px;
   border-top: 1px solid #e3e4e7;
   color:#e3e4e7;
}

</style>

<!-- footer -->
<footer>
   <div class="footer-top w-100">
      <div class="flex column g-3">
         <a href="./home.html" class="center logo n-link">
            <img
               src="./images/logo-icon.png"
               class="center"
               width="50px"
               alt=""
            />
            <h3>Co Life</h3>
         </a>
         <div class="social-icons flex g-1">
            <img src="./images/media/fb.png" alt="" />
            <img src="./images/media/insta.png" alt="" />
            <img src="./images/media/linkdin.png" alt="" />
            <img src="./images/media/yt.png" alt="" />
            <img src="./images/media/wa.png" alt="" />
         </div>
         <div class="newsletter flex">
            <input type="text" placeholder="example@gmail.com" />
            <button>Subscribe</button>
         </div>
      </div>
      <div class="flex column g-1">
         <a href="./index.php">Home</a>
         <a href="./blog.php">Blog</a>
         <a href="./incident.php">Wild Info</a>
         <a href="./tours.php">Tours</a>
         <a href="./about.php">About Us</a>
      </div>
      <div class="flex column g-1">
         <a href="./incident.php">Incidents</a>
         <a href="./terms.php">Terms & Conditions</a>
         <a href="./contact.php">Contact Us</a>
         <a href="#">Privacy Policy</a>
         <a href="#">Help</a>
      </div>
   </div>
   <div class="footer-bottom center w-100">
      <p>&copy 2024 Sri Lankan Saffari trip management</p>
   </div>
</footer>
<!-- End of footer -->