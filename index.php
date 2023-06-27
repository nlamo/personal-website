<?php
   session_start();

   require 'lib/head.php';
   require 'lib/header.php';
   require 'lib/footer.php';

   if (isset($_SESSION['inputsHaveContent'])) {
      session_destroy();
   }
?>

<!DOCTYPE html>
<html lang="en">

<?php new Head(); ?>

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
