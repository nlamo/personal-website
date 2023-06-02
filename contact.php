<?php
   session_start();

   require 'lib/header.php';
   require "lib/form-contact.php";
   require 'lib/footer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&amp;display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
   <title>Nicholas LaMothe - Portfolio Website</title>
</head>

<body>
   <?php new Header( 'Contact' ); ?>

   <section class="smartphone-contact-section">
      <div class="form-container">
         <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p class="opener"><b>Got a question, consideration, or curiosity? Feel free to reach out.</b></p><br>

            <div class="form-inner email-container">
               <label class="name">e-mail</label>
               <div class="content">
                  <input type="text" name="email">
               </div>
            </div>

            <div class="form-inner subject-container">
               <label class="name">subject</label>
               <div class="content">
                  <input type="text" name="subject">
               </div>
            </div>

            <div class="form-inner message-container">
               <label class="name">message</label>
               <div class="content">
                  <textarea name="message"></textarea>
               </div>
            </div>


            <div class="form-inner question-container">
               <label class="name">question</label>
               <div class="content">
                  <input type="hidden" name="random-question" value="<?php echo $randomQuestion; ?>">

                  <label class="question">
                     <span class="question-inner">
                        <?php echo $randomQuestion; ?>
                     </span>
                     <input type="text" name="answer"><br>
                  </label>

    
               </div>
            </div>

            <button class="button-submit" type="submit" name="submit" class="button">submit</button>
         </form>

         <?php if (isset($_SESSION['inputsHaveContent'])) : ?>

            <?php if ($_SESSION['inputsHaveContent'] == false) : ?>

               <div class="alert-message">Please enter information within all fields.</div>

            <?php elseif ($_SESSION['emailIsValid'] == false) : ?>

               <div class="alert-message">Please use a valid e-mail address.</div>

            <?php elseif ($_SESSION['answerIsValid'] == false) : ?>

               <div class="alert-message">Break out the encyclopedia?</div>

            <?php else : ?>

               <div class="success-message">E-mail sent!</div>

            <?php endif; ?>

         <?php endif; ?>
      </div>
   </section>

   <?php new Footer(); ?>

   <script src="js/general.js" defer></script>
   <script src="js/time.js" defer></script>
</body>

</html>
