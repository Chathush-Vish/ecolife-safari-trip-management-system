<?php session_start();  ?>
      
      <!-- styles -->

 <style>     
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

.w-100 {
   width: 100%;
}

.w-50 {
   width: 50%;
}

.vh-100 {
   height: 100vh;
}

.vh-50 {
   height: 50vh;
}

.padding-x {
   padding: 0 150px;
}

.padding-y {
   padding: 70px 0 0 0;
}

.marging-x {
   margin: 0 150px;
}

.marging-y {
   margin: 70px 0 0 0;
}

.pt {
   padding-top: 50px;
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

.main-btn {
   width: 100px;
   height: 40px;
   border: none;
   color: var(--mainWhite);
   background-color: var(--primaryGreen);
}

.main-btn:hover {
   background-color: var(--primaryBlack);
}

.main-btn a {
   color: #008455;
}

.second-btn a {
   color: #008455;
}

.second-btn {
   width: 100px;
   height: 40px;
   border: 2px solid var(--primaryGreen);
   color: var(--primaryGreen);
   background: transparent;
}

.second-btn:hover {
   color: var(--mainWhite);
   background-color: var(--primaryBlack);
   border: none;
}

.see-more-btn {
   margin-top: 50px;
   background-color: var(--primaryGreen);
   color: #fff;
   display: flex;
   align-items: center;
   justify-content: center;
   border-radius: 2px;
   border: none;
   padding: 10px 20px;
}

.see-more-btn:hover {
   background-color: #46a163;
}

.see-more-btn a {
   color: #fff;
}

.logo {
   gap: 5px;
}

/* Local styles */
.navbar {
   position: fixed;
   height: 10vh;
   width: 100%;
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding: 0 150px;
   top: 0;
   left: 0;
   background-color: transparent;
   color: #fff;
   z-index: 1000000;
}

.navbar h3 {
   font-size: 1.5em;
}

.navbar a {
   font-size: 1.05em;
   color: var(--primaryBlack);
   font-weight: 500;
}

.navbar a:hover {
   font-weight: 600;
}

.navbar .nav-links {
   display: flex;
   align-items: center;
   gap: 20px;
}

.navbar .n-link {
   color: #fff;
}

.navbar a:hover {
   color: var(--primaryGreen);
}
</style>
      <!-- End of styles -->

      <!-- header -->
      <header>
         <nav class="navbar">
            <a href="./index.php" class="center logo n-link">
               <img
                  src="./images/logo-icon.png"
                  class="center"
                  width="40px"
                  alt=""
               />
               <h3>Co Life</h3>
            </a>
            <ul class="nav-links">
               <li class="nav-link">
                  <a href="./tours.php" class="n-link">Tours</a>
               </li>
               <li class="nav-link">
                  <a href="./blog.php" class="n-link">Blog</a>
               </li>
               <li class="nav-link">
                  <a href="./wildinfo.php" class="n-link">Wild Info</a>
               </li>
               <li class="nav-link">
                  <a href="./incident.php" class="n-link">Incidents</a>
               </li>
               <li class="nav-link">
                  <a href="./about.php" class="n-link">About Us</a>
               </li>
               <li class="flex g-1">
               <?php
                  if(isset($_SESSION['email'])){
                     echo '<a href="./user-dashboard.php">
                     <img src="./images/user-icon.png" width="40" />
                     </a>';
                  }
                  else{
                     echo '<a href="./login.php">
                           <button class="second-btn" id="acc-link">
                              Log In
                           </button>
                           </a>';
                  }              
               ?>
               
                  <a href="./contact.php">
                     <button class="main-btn">Contact</button>
                  </a>
               </li>
            </ul>
         </nav>
      </header>
      <!-- End of header -->

      <script src="./src/navbar.js"></script>