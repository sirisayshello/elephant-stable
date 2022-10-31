<?php declare(strict_types=1);

function competeWithHorse(): array
{
    $competitionResult =
        [
            ['placed' => 1, 'message' => "VINST! Vilket team! Det behöver firas. Tillbaka till stallet för morötter och tårta!"],
            ['placed' => 5, 'message' => "5:e placering, inte dåligt! Klappa om både dig själv och hästen!"],
            ['placed' => 'Utesluten', 'message' => "Åh nej, du blev utesluten! Hästen kanske hade en dålig dag... Men det var troligtvis ditt fel. Tillbaka till stallet och öva mer!"]
        ];

    $result = $competitionResult[array_rand($competitionResult)];

    return $result;
}

$result = competeWithHorse();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Document</title>
</head>

<body>
    <main>
        <section class="at-arena">

        <img src="/elephant/images/course.png" alt="" class="course">

        <div class="board">
        <h3>RESULTAT</h3>
        <p><?php echo "$result[placed]. $result[message]" ?></p>
        </div>
    
         <a href="stable.php" class="big-button">TILLBAKA TILL STALLET</a>
    
        </section>
    </main>
</body>

</html>