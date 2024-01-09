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

<body class="home">
    <?php new Header(); ?>

    <section>
        <div class="container-404">
            <div class="text">
                <p>404</p>
            </div>
            <div class="messages">
                <div class="message">
                    <p>Whoops! This is probably not what you're looking for, also known as a <strong>404</strong>.</p>
                </div>
                <div class="message">
                    <p>Check out the links at the top of the page, or my other links at the bottom.</p>
                </div>
            </div>
        </div>
    </section>

    <?php new Footer(); ?>

    <script src="js/general.js" defer></script>
    <script src="js/time.js" defer></script>
</body>

</html>