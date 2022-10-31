<?php

declare(strict_types=1);


$horses =
    [
        [
            'name' => 'Angel',
            'age' => 15,
            'color' => 'Skäck',
            'breed' => 'Irländsk Sporthäst',
            'picture' => 'https://www5.idrottonline.se/globalassets/goteborgs-fk---ridsport/hastar/_dsc9698.jpg?w=481&h=320'
        ],
        [
            'name' => 'Jasmine',
            'age' => 13,
            'color' => 'Skimmel',
            'breed' => 'Svenskt Varmblod',
            'picture' => 'https://www5.idrottonline.se/globalassets/goteborgs-fk---ridsport/hastar/jasmine.jpg?w=205&h=364'
        ],
        [
            'name' => 'Lincoln',
            'age' => 13,
            'color' => 'Brun',
            'breed' => 'Oldenburgare',
            'picture' => 'https://www5.idrottonline.se/globalassets/goteborgs-fk---ridsport/hastar/_dsc0652.jpg?w=481&h=320'
        ],
        [
            'name' => 'Quincy',
            'age' => 17,
            'color' => 'Skimmel',
            'breed' => 'Holsteiner',
            'picture' => 'https://www5.idrottonline.se/globalassets/goteborgs-fk---ridsport/hastar/_dsc9341.jpg?w=252&h=380'
        ]
    ];


function getHorseFromHorses(string $selectedHorse, array $horses): array {

    foreach ($horses as $horse){
        if ($horse['name'] === $selectedHorse){
            return $horse;
        }
    }

    // Default to Angel
    return $horses[0];
}


if (isset($_GET['horse'])) {
    $selectedHorse = getHorseFromHorses($_GET['horse'], $horses);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="horse.css">
    <title>Document</title>
</head>

<body>
    <main>
        <section class="at-horse">

            <?php

            if ($selectedHorse) {
                
            ?>
                <img src="<?php echo $selectedHorse['picture'] ?>" alt="" class="horse-picture">
                <article class="about-horse">
                    <p> <?php echo $selectedHorse['name']; ?> </p>
                    <ul>
                        <li>Ålder: <?php echo $selectedHorse['age']; ?></li>
                        <li>Färg: <?php echo $selectedHorse['color']; ?></li>
                        <li>Ras: <?php echo $selectedHorse['breed']; ?></li>
                    </ul>
                </article>
            <?php

            }
            ?>
            <a href="" class="medium-button">BORSTA</a>
            <a href="" class="medium-button">MATA</a>
            <a href="stable.php" class="big-button">TILLBAKA TILL STALLET</a>
        </section>



    </main>
</body>

</html>