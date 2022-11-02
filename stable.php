<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';
require __DIR__ . '/variables.php';

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stable.css">
    <title><?php echo "$pageTitle | Stallet" ?></title>
</head>
<header></header>

<body>
    <main>

        <div class="stable">

            <?php

            // Fetching all horses and rendering them out in individual box stalls.
            foreach ($horses as $horse) { ?>
                <div class="horse-box">
                    <p>
                        <?php echo $horse['name'] ?>
                    </p>
                    <a href="horse.php?horse=<?php echo $horse['name'] ?>" class="small-button">BESÖK</a>
                </div>
            <?php }

            ?>

            <div>
                <img src="images/pileOfCarrots.png" alt="A pile of carrots." class="carrots">
                <a href="index.php" class="medium-button">LÄMNA STALLET</a>
            </div>
            <div>
                <img src="images/groomkit.png" alt="A red bucket and grooming brushes." class="groomkit">
                <a href="arena.php" class="medium-button">TÄVLA</a>
            </div>

        </div>

    </main>
</body>

</html>
