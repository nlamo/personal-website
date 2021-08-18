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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
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
                    <!-- <li><a href="portfolio.php ">portfolio</a></li> -->
                    <li><a href="about.php" style="color:#FFF;">about</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="smartphone-about-section">
        <div class="about-container">
            <div class="about-grid">

                <div class="portrait-container">
                    <img class="bottom-drawing" src="img/portrait2.jpg" alt="">
                    <img class="top-drawing" src="img/portrait1.jpg" alt="">
                </div>

                <div class="about-me">
                    <p>
                        My passion for technology started at an early age - from troubleshooting issues in MS-DOS with my father to using the terminal of a Commodore 64 for the first time in one of the school portables. This developed concurrently with an obsession with gaming, which sparked an interest in hardware and building desktop computers.<br></br>

                        Eventually, I became enthralled by the study of philosophy and literature, with a special interest in philosophy of mind, ethics, and modernism, thus forming the basis of my undegraduate studies. Years later, by way of literary insight, I was compelled to start programming.<br></br>
                        
                        I'm currently finishing up a post-bacc graduate diploma in computer science while studying web development and UX in my spare time. I also love to cycle and illustrate, and I even like to try my hand at a few algorithms, here and there.<br><br>

                        You can find my resume <a href="cv/Nicholas_LaMothe_CV.pdf">here</a>. 
                    </p>
                </div>
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