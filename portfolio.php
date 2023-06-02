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
