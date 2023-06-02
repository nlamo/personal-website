<?php
   session_start();

   require 'lib/header.php';
   require 'lib/footer.php';

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
   <?php new Header( 'About' ); ?>

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

                  During university, my focus was philosophy and literature, with a special interest in philosophy of mind, ethics, and modernism. Years later, by way of literary insight, I began programming.<br></br>

                  My experience has been primarily with the LAMP stack, with a healthy balance of front-end (CSS/Sass/JS/jQuery/React) and back-end (PHP/MySQL).<br><br>
                  
                  Recreationally, I enjoy film, literature, illustration, music, gaming, and cycling.<br><br>

                  <spvan id="highlight-selection-container">
                     You can find my resume <a href="resume/nicholas-lamothe-resume.pdf">here</a>.
                     <img id="highlight-selection" src="./img/highlight-selection.png" alt="">
                  </span>
               </p>
            </div>
         </div>
   </section>

   <?php new Footer(); ?>

   <script src="js/general.js" defer></script>
   <script src="js/time.js" defer></script>
</body>

</html>
