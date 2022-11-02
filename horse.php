<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';
require __DIR__ . '/variables.php';

// If a horse is set from the previous page, fetch that horse's information from the array horses.
if (isset($_GET['horse'])) {
    $selectedHorse = getHorseFromHorses($_GET['horse'], $horses);
}

?>


<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="horse.css">
    <title><?php echo "$pageTitle | $selectedHorse[name]" ?></title>
</head>

<body>
    <main>

        <img src="images/ribbon1.png" alt="" class="ribbon1">

        <div class="at-horse">
            <?php

            // If a horse is selected, render out that horse's information.
            if ($selectedHorse) {

            ?>
                <!-- We're hiding these messages for now. -->
                <div class="hide-feed-message feed-message"><?php echo $feedMessage ?></div>
                <div class="hide-groom-message groom-message"><?php echo $groomMessage ?></div>

                <img src="<?php echo $selectedHorse['picture'] ?>" alt="<?php echo $selectedHorse['alt'] ?>" class="horse-picture">
                <article class="about-horse">
                    <h1> <?php echo $selectedHorse['name']; ?> </h1>
                    <ul>
                        <li>Ålder: <?php echo getHorseAge($selectedHorse['birthYear']); ?></li>
                        <li>Mankhöjd: <?php echo $selectedHorse['height']; ?></li>
                        <li>Färg: <?php echo $selectedHorse['color']; ?></li>
                        <li>Ras: <?php echo $selectedHorse['breed']; ?></li>
                    </ul>
                    <p><?php echo $selectedHorse['about']; ?></p>
                </article>
            <?php

            }
            ?>

            <!-- Buttons to show hidden messages with javascript funtions. -->
            <input type="button" id="mata" value="MATA" onclick="showFeedMessage()" class="feed-button" />
            <input type="button" id="borsta" value="BORSTA" onclick="showGroomMessage()" class="groom-button" />

            <a href="stable.php" class="big-button">TILLBAKA TILL STALLET</a>
        </div>

        <img src="images/ribbon2.png" alt="" class="ribbon2">

    </main>

    <!-- Functions that remove the classes that are hiding the messages. -->
    <script type='text/javascript'>
        const feedMessage = document.querySelector('.hide-feed-message');
        const showFeedMessage = () => {
            feedMessage.classList.remove('hide-feed-message');
        }

        const groomMessage = document.querySelector('.hide-groom-message');
        const showGroomMessage = () => {
            groomMessage.classList.remove('hide-groom-message');
        }
    </script>
</body>

</html>
