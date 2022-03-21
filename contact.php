<?php
    // Using post/redirect/get pattern, but there are still some kinks to work out
    session_start();

    if (filter_has_var(INPUT_POST, 'submit')) {

        // NOTE: for use in the PHP statements *within* the HTML code, after redirects
        $inputsHaveContent = false;
        $emailIsValid = false;
        $answerIsValid = false;

        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
        $answer = htmlspecialchars($_POST['answer']);

        $_SESSION['email'] = $email;
        $_SESSION['subject'] = $subject;
        $_SESSION['message'] = $message;
        $_SESSION['answer'] = $answer;

        // If any fields are empty, redirect and display appropriate message; else, more validation (e-mail validity, math question) for e-mail send
        if (empty($email) || empty($subject) || empty($message) || empty($answer)) {
            $_SESSION['inputsHaveContent'] = $inputsHaveContent;  
            header("Location: contact.php");
        }
        else {
            $inputsHaveContent = true;
            $_SESSION['inputsHaveContent'] = $inputsHaveContent;      

            $senderEmail = "Sent from " . $email . " :\n\n";

            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $_SESSION['emailIsValid'] = $emailIsValid;
                header("Location: contact.php");
            }
            else if ($answer != 38) {
                $emailIsValid = true;
                $_SESSION['emailIsValid'] = $emailIsValid;
                $_SESSION['answerIsValid'] = $answerIsValid;
                header("Location: contact.php");
            }
            else {
                $emailIsValid = true;
                $answerIsValid = true;
                $_SESSION['emailIsValid'] = $emailIsValid;
                $_SESSION['answerIsValid'] = $answerIsValid;
    
                $to = "lamothe.dev@gmail.com";
             // $subject = already defined
                $body = $senderEmail . $message;
                mail($to, $subject, $body);
    
                header("Location: contact.php");
            }   
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <title>Nicholas LaMothe - Portfolio Website</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo.png"alt="">
                </a>

                <div class="job-title">
                    web development
                </div>
            </div>

            <div class="smartphone-job-title">
                web development
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
                <p><b>Got a question, consideration, or curiosity? Feel free to reach out. </b></p><br>
    
                <label><u>E-mail</u></label><br>
                <input type="text" name="email">
        
                <br>
        
                <label><u>Subject</u></label><br>
                <input type="text" name="subject">
                
                <br>
        
                <label><u>Message</u></label><br>
                <textarea name="message"></textarea>

                <br>

                <label><u>Question:</u></label><br>
                <label>6 * 7 - (2 * 4) / 2</label>

                <br>
                
                <input type="text" name="answer">

                <br><br><br>
        
                <button type="submit" name="submit" class="button">Submit</button>

                <br>
            </form>

            <?php if(isset($_SESSION['inputsHaveContent'])): ?>

                <?php if($_SESSION['inputsHaveContent'] == false): ?>

                    <div class="alert-message">Please enter information within all fields.</div>
                    
                <?php elseif($_SESSION['emailIsValid'] == false): ?>   

                    <div class="alert-message">Please use a valid e-mail address.</div>

                <?php elseif($_SESSION['answerIsValid'] == false): ?>

                    <div class="alert-message">Break out the calculator?</div>

                <?php else: ?>    

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
