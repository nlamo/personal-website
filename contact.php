<?php

    // Using post/redirect/get pattern, but there are still some kinks to work out

    session_start();

    if (filter_has_var(INPUT_POST, 'submit')) 
    {
        // NOTE: for use in the PHP statements *within* the HTML code, after redirects
        $inputsHaveContent = false;
        $emailIsValid = false;

        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        $_SESSION['email'] = $email;
        $_SESSION['subject'] = $subject;
        $_SESSION['message'] = $message;

        if ( empty($email) || empty($subject) || empty($message) )
        {
            $_SESSION['inputsHaveContent'] = $inputsHaveContent;  
            
            // Redirect, then session variable will trigger alert-message UI element
            header("Location: contact.php");
        }
        else
        {
            $inputsHaveContent = true;
            $_SESSION['inputsHaveContent'] = $inputsHaveContent;      

            $senderEmail = "Sent from " . $email . " :\n\n";

            // If e-mail is invalid, will redirect without calling mail()
            if ( (filter_var($email, FILTER_VALIDATE_EMAIL)) == false )
            {
                $_SESSION['emailIsValid'] = $emailIsValid;
                header("Location: contact.php");
            }
            else 
            {
                $emailIsValid = true;
                $_SESSION['emailIsValid'] = $emailIsValid;
    
                $to = "lamothe.dev@gmail.com";
             // $subject = already defined
                $body = $senderEmail . $message;
                mail($to, $subject, $body);
    
                // Redirect, then session variable will trigger success-message UI element
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

                <!-- For regular display (see: styles.css) -->
                <div class="job-title">
                    web development / ux
                </div>
            </div>

            <!-- Only for smartphone queries (see: media-queries.css) -->
            <div class="smartphone-job-title">
                web development / ux
            </div>

            <div class="nav-list">
                <ul>
                    <li><a href="portfolio.php">portfolio</a></li>
                    <li><a href="about.php">about</a></li>
                    <li><a href="contact.php" style="color:#FFF;">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section>
        <div class="form-container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <p><b>Got a question, consideration, quandry, or curiosity? Feel free to reach out. </b></p><br>
    
                <label><u>Email</u></label><br>
                <input type="text" name="email">
        
                <br>
        
                <label><u>Subject</u></label><br>
                <input type="text" name="subject">
        
                <br>
        
                <label><u>Message</u></label><br>
                <textarea name="message"></textarea>

                <br><br>
        
                <button type="submit" name="submit" class="button">Submit</button>

                <br>
            </form>

            <!-- Session variables will determine the UI message outputs here -->
            <?php if(isset($_SESSION['inputsHaveContent'])): ?>

                <?php if($_SESSION['inputsHaveContent'] == false): ?>

                    <div class="alert-message">Please enter information in all fields.</div>
                    
                <?php elseif($_SESSION['emailIsValid'] == false): ?>   

                    <div class="alert-message">Please enter a valid e-mail address.</div>

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
                &copy; 2021 Nicholas LaMothe
            </div>
        </div>
    </footer>
</body>
</html>
