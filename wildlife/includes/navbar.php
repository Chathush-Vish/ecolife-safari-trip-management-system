<?php session_start();  ?>

      <style>
         :root {
            --primaryGreen: #008455;
            --primaryBlack: #111111;
            --seconderyCream: #f5dea8;
            --lightGreen: #b5e48c;
            --mainWhite: #ffffff;
            --seconderyText: #2f3e46;
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

         
         a {
            text-decoration: none;
            color: var(--primaryBlack) !important;
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
            background-color: #fff;
            color: #222;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.15);
            z-index: 1000000;
            background-color:  #fff !important;
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
            color: #222;
         }

         .navbar a:hover {
            color: var(--primaryGreen);
         }

         .nav-btns {
            display: flex;
            gap: 10px;
         }

         .center{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
         }

      </style>

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
               <li class="nav-btns">
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
