<?php
   session_start();

   if (isset($_SESSION['inputsHaveContent'])) {
      session_destroy();
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
   <title>Nicholas LaMothe - Portfolio Website</title>
</head>

<body>
   <header>
      <nav class="navigation">
         <div class="name">
            <a href="index.php">
               nicholas lamothe
            </a>
         </div>
         <div class="nav-list">
            <ul>
               <li><a href="about.php" style="color:#FFF;">about</a></li>
               <li><a href="contact.php">contact</a></li>
            </ul>
         </div>
      </nav>
   </header>

   <section class="smartphone-about-section">
      <div class="about-container">
         <div class="about-grid">

            <div class="portrait-container">
               <img class="bottom-portrait" src="img/portrait2.jpg" alt="">
               <img class="top-portrait" src="img/portrait1.jpg" alt="">
            </div>

            <div class="about-me">
               <p>
                  My passion for technology started at an early age - from troubleshooting issues in MS-DOS with my father to using the terminal of a Commodore 64 for the first time in one of the school portables. This developed concurrently with an obsession with gaming, which sparked an interest in hardware and building desktop computers.<br></br>

                  During my university years, I focused on studies in philosophy and literature, with a special interest in philosophy of mind, ethics, and modernism. Years later, by way of literary insight, I was compelled to start programming.<br></br>

                  Primarily, I work in the WordPress environment (LAMP), with a healthy balance of front-end (CSS/Sass/JQ/jQuery/React) and back end (PHP/MySQL).<br><br>
                  
                  Recreationally, I enjoy film, literature, illustration, music, gaming, cycling, and squash.<br><br>

                  <span id="highlight-selection-container">
                     You can find my resume <a href="cv/nicholas-lamothe-cv.pdf">here</a>.
                     <img id="highlight-selection" src="./img/highlight-selection.png" alt="">
                  </span>
               </p>
            </div>
         </div>
   </section>

   <footer>
      <div class="footer-container">
         <a href="https://www.linkedin.com/in/nicholas-lamothe/" target="_blank">
            <img src="img/linkedin_logo.png">
         </a>
         <a href="https://github.com/nlamo/" target="_blank">
            <img src="img/github_logo.png">
         </a>

         <div class="copyright-overlay">
            &copy; <span id="current-year"></span> Nicholas LaMothe
         </div>
      </div>
   </footer>

   <script src="js/time.js" defer></script>
</body>

</html>
