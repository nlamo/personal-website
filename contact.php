<?php
    if (filter_has_var(INPUT_POST, 'submit')) 
    {
        // for use in the HTML code
        $inputsAreValid = false;

        if ( empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message']) )
        {
            // OUTPUT: displays an alter box below submit button (see PHP in the form)
        }
        else 
        {
            $inputsAreValid = true;

            $senderemail = "Sent from " . htmlspecialchars($_POST['email']) . " :\n\n";

            $to = "lamothe.dev@gmail.com";
            $subject = htmlspecialchars($_POST['subject']);
            $body = $senderemail . htmlspecialchars($_POST['message']);

            // mail($to, $subject, $body)
            // fourth additional parameter is vulnerable to injection attacks, apparently

            // mail($to, $subject, $body);

            // OUTPUT: displays a success box below submit button (see PHP in the form)
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
    <link rel="stylesheet" href="css/styles.css">
    <title>Nicholas LaMothe - Portfolio Website</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <div class="logo">
                <a href="index.html">
                    <img src="img/logo.png"alt="">
                </a>
            </div>

            <div class="nav-list">
                <ul>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php" style="color:#FFF;">Contact</a></li>
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
                <textarea name="message" rows="12"></textarea>

                <br><br>
        
                <button type="submit" name="submit" class="button">Submit</button>

                <br>

                <?php if(isset($inputsAreValid)): ?>

                    <?php if($inputsAreValid == false): ?>
                        <div class="alert-message">Please enter information in all fields.</div>
                    <?php else: ?>    
                        <div class="success-message">E-mail sent!</div>
                    <?php endif; ?>

                <?php endif; ?>
            </form>
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