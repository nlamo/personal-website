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
   <meta name="viewport" content="height=device-height, initial-scale=1, maximum-scale=1" />
   <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
   <title>Nicholas LaMothe - Portfolio Website</title>
</head>

<body>
   <?php new Header(); ?>

   <section class="smartphone-index-section">
      <div class="loader-container">
         <div class="loader" id="loader">
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
         </div>
      </div>

      <div class="landscape-drawings-container" id="landscape-drawings-container">
         <img class="bottom-drawing" id="bottom-drawing" src="img/landscape_coloured_wide.jpg" alt="">
         <img class="bottom-drawing-smartphone" id="bottom-drawing-smartphone" src="img/landscape_outline_coloured_smartphone.jpg" alt="">

         <img class="top-drawing" id="top-drawing" src="img/landscape_outline_wide.jpg" alt="">
         <img class="top-drawing-smartphone" id="top-drawing-smartphone" src="img/landscape_outline_smartphone.jpg" alt="">
      </div>
   </section>

   <?php new Footer(); ?>

   <script src="js/general.js" defer></script>
   <script src="js/loader.js" defer></script>
   <script src="js/time.js" defer></script>
</body>

</html>
