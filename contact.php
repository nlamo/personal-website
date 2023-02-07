<?php
   session_start();

   require "lib/form-contact.php";
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
   <header>
      <nav class="navigation">   
         <div class="name">
            <a href="index.php">
               nicholas lamothe
            </a>
         </div>
         <div class="nav-list">
            <ul>
               <li><a href="about.php">about</a></li>
               <li><a href="contact.php" style="color:#FFF;">contact</a></li>
            </ul>
         </div>
      </nav>
   </header>

   <section class="smartphone-contact-section">
      <div class="form-container">
         <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p class="opener"><b>Got a question, consideration, or curiosity? Feel free to reach out.</b></p><br>

            <div class="form-inner email-container">
               <label class="name"><u>e-mail</u></label>
               <div class="content">
                  <input type="text" name="email">
               </div>
            </div>

            <div class="form-inner subject-container">
               <label class="name"><u>subject</u></label>
               <div class="content">
                  <input type="text" name="subject">
               </div>
            </div>

            <div class="form-inner message-container">
               <label class="name"><u>message</u></label>
               <div class="content">
                  <textarea name="message"></textarea>
               </div>
            </div>


            <div class="form-inner question-container">
               <label class="name"><u>question</u></label>
               <div class="content">
                  <input type="hidden" name="random-question" value="<?php echo $randomQuestion; ?>">

                  <label class="question">
                     <span style="font-size: .9rem;">
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
