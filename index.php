<?php
    session_start();

    if (isset($_SESSION['inputsHaveContent']))
    {
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
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
                    <!-- <li><a href="portfolio.php">portfolio</a></li> -->
                    <li><a href="about.php">about</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="smartphone-index-section">
        <div class="loader" id="loader"></div>

        <div class="landscape-drawings-container" id="landscape-drawings-container">

            <img class="bottom-drawing" id="bottom-drawing" src="img/landscape_coloured.JPG" alt="">
            <img class="bottom-drawing-smartphone" id="bottom-drawing-smartphone" src="img/landscape_coloured_smartphone.JPG" alt="">
            <img class="bottom-drawing-wide" id="bottom-drawing-wide" src="img/landscape_coloured_wide.jpg" alt="">

            <img class="top-drawing" id="top-drawing" src="img/landscape_outline.JPG" alt="">
            <img class="top-drawing-smartphone" id="top-drawing-smartphone" src="img/landscape_outline_smartphone.jpg" alt="">
            <img class="top-drawing-wide" id="top-drawing-wide" src="img/landscape_outline_wide.jpg" alt="">

            <div class="speech-bubble" id="speech-bubble">Greetings! I'm Nick. Welcome to my website. </div>
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

    <script src="script.js" defer></script>
</body>
</html>
