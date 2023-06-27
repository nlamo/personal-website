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
   <?php new Header( 'Portfolio' ); ?>

   <section>
      <div class="portfolio-grid">
         <div class="project">Project 1</div>
         <div class="project">Project 2</div>
         <div class="project">Project 3</div>
         <div class="project">Project 4</div>
         <div class="project">Project 5</div>
         <div class="project">Project 6</div>
         <div class="project">Project 7</div>
         <div class="project">Project 8</div>
      </div>
   </section>

   <?php new Footer(); ?>

   <script src="js/general.js" defer></script>
   <script src="js/time.js" defer></script>
</body>

</html>
