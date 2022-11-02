<?php

declare(strict_types=1);

require __DIR__ . '/variables.php';

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="arena.css">
    <title><?php echo "$pageTitle | Tävling" ?></title>
</head>

<body>
    <main>
        <div class="at-arena">

            <img src="images/course.png" alt="A showjumping course." class="course">

            <div class="board">
                <p>Vilken häst vill du tävla med?</p>

                <!-- Required form to choose a horse to compete with. Submitting will send you to next page. -->
                <form class="choose-horse" action="result.php" method="POST">
                    <div>
                        <label for="angel">Angel</label>
                        <input id="angel" type="radio" name="horse" value="Angel" required>
                    </div>
                    <div>
                        <label for="sunny">Sunny</label>
                        <input id="sunny" type="radio" name="horse" value="Sunny">
                    </div>
                    <div>
                        <label for="lincoln">Lincoln</label>
                        <input id="lincoln" type="radio" name="horse" value="Lincoln">
                    </div>
                    <div>
                        <label for="colleen">Colleen</label>
                        <input id="colleen" type="radio" name="horse" value="Colleen">
                    </div>

                    <button class="small-button" type="submit">STARTA</button>
                </form>
            </div>

            <svg class="svg-tree1" xmlns="http://www.w3.org/2000/svg" width="122" height="130" fill="none">
                <path fill="#7B5F3E" d="M51 72h15l-1.8 20.88L66 130H48l3-18.85V72Z" />
                <path fill="#648C4C" d="M47.835 7.326C25.08-4.25 11.987 8.499 11.987 16.712c-12.86 7.43-14.548 20.383-8.963 30.505-6.234 12.828 8.183 25.42 14.807 25.42 13.249 19.555 30.524 12.255 42.863 8.605 14.963 14.079 41.694-.782 42.862-11.342 16.834-2.816 15.847-18.381 13.249-25.812 16.21-17.833-9.741-36.762-20.262-31.678C78.774-7.3 56.667.808 47.835 7.326Z" />
            </svg>

            <svg class="svg-tree2" xmlns="http://www.w3.org/2000/svg" width="126" height="158" fill="none">
                <path fill="#7B5F3E" d="M54.833 83H74l-2.3 27 2.3 48H51l3.833-24.375V83Z" />
                <path fill="#648C4C" d="M73.157 6.796c-18.176-13.172-44.062-4.41-46.472 2.94-21.756 0-27.883 19.406-22.031 31.755-11.016 9.173 0 24.992 7.573 24.992C8.44 80.007 30.587 83.34 41.831 82.948c13.22 14.583 32.13 6.076 39.932 0 22.582 5.88 28.227-11.271 28.227-20.582 20.104-1.646 17.098-18.523 13.081-26.756 6.885-9.643-6.196-22.345-13.081-22.345C101.178-3.906 75.911.915 73.157 6.796Z" />
            </svg>

            <a href="stable.php" class="big-button">TILLBAKA TILL STALLET</a>

        </div>
    </main>
</body>

</html>
