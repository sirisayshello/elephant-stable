<?php

declare(strict_types=1);

$horses =
    [
        [
            'name' => 'Angel',
            'age' => 15, 'color' => 'piebald',
            'breed' => 'Irish Sport Horse',
            'picture' => 'https://www5.idrottonline.se/globalassets/goteborgs-fk---ridsport/hastar/_dsc9698.jpg?w=481&h=320'
        ],
        [
            'name' => 'Jasmine',
            'age' => 13,
            'color' => 'gray',
            'breed' => 'Swedish Warmblood',
            'picture' => 'https://www5.idrottonline.se/globalassets/goteborgs-fk---ridsport/hastar/jasmine.jpg?w=205&h=364'
        ],
        [
            'name' => 'Lincoln',
            'age' => 13,
            'color' => 'bay',
            'breed' => 'Oldenburger',
            'picture' => 'https://www5.idrottonline.se/globalassets/goteborgs-fk---ridsport/hastar/_dsc0652.jpg?w=481&h=320'
        ],
        [
            'name' => 'Quincy',
            'age' => 17,
            'color' => 'gray',
            'breed' => 'Holsteiner',
            'picture' => 'https://www5.idrottonline.se/globalassets/goteborgs-fk---ridsport/hastar/_dsc9341.jpg?w=252&h=380'
        ]
    ];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stable.css">
    <title>Document</title>
</head>
<header></header>

<body>
    <main>

        <section class="stable">

            <?php

            foreach ($horses as $horse) { ?>
                <div class="horse-box">
                    <p>
                        <?php echo $horse['name'] ?>
                    </p>
                    <a href="horse.php?horse=<?php echo $horse['name'] ?>" class="small-button">BESÖK</a>
                </div>
            <?php }

            ?>

            <section>
                <img src="/elephant/images/pileOfCarrots.png" alt="" class="carrots">
                <a href="index.php" class="medium-button">LÄMNA STALLET</a>
            </section>
            <section>
                <img src="/elephant/images/groomkit.png" alt="" class="groomkit">
                <a href="arena.php" class="medium-button">TÄVLA</a>
            </section>

        </section>

    </main>
</body>

</html>