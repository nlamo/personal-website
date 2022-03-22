<?php
    // Using post/redirect/get pattern, but there are still some kinks to work out
    session_start();

    // Associative array of equations and answers
    $equations = array(
        "6 * 7 - (2 * 4) / 2" => 38,
        "(4 * 5) / 2 * 6 / 2" => 30,
        "(18 + 3) / 3 * (4 * 3)" => 84,
        "(20 + 13) / 3 + 43" => 54,
        "(49 / 7) - 7 + 43" => 43
    );

    // Gets a random equation from an array of equations
    function getRandomEquation($equations) {

        return array_rand($equations, 1);
    }

    $randomEquation = getRandomEquation($equations);

    // ------------------------------------------------------------------------------------------------

    if (filter_has_var(INPUT_POST, 'submit')) {

        $inputsHaveContent = false;
        $emailIsValid = false;
        $answerIsValid = false;

        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
        $randomEq = htmlspecialchars($_POST['random-equation']);
        $answer = htmlspecialchars($_POST['answer']);

        $_SESSION['email'] = $email;
        $_SESSION['subject'] = $subject;
        $_SESSION['message'] = $message;

        // Get array key from the random equation
        $actualAnswer = $equations[$randomEq];

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
            else if ($answer != $actualAnswer) {
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
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&amp;display=swap" rel="stylesheet">
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
    
                <label><u>E-mail</u></label>
                <input type="text" name="email">
        
                <label><u>Subject</u></label>
                <input type="text" name="subject">
        
                <label><u>Message</u></label>
                <textarea name="message"></textarea>

                <label><u>Question</u></label>
                <input type="hidden" name="random-equation" value="<?php echo $randomEquation; ?>">
                <label>
                    <span style="font-size: .9rem;">
                        <?php echo $randomEquation; ?>
                    </span>
                </label>
                
                <input type="text" name="answer"><br>
        
                <button type="submit" name="submit" class="button">Submit</button>
            </form>

            <?php if (isset($_SESSION['inputsHaveContent'])): ?>

                <?php if ($_SESSION['inputsHaveContent'] == false): ?>

                    <div class="alert-message">Please enter information within all fields.</div>
                    
                <?php elseif ($_SESSION['emailIsValid'] == false): ?>   

                    <div class="alert-message">Please use a valid e-mail address.</div>

                <?php elseif ($_SESSION['answerIsValid'] == false): ?>

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
