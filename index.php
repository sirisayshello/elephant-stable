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
    <link rel="stylesheet" href="index.css">
    <title><?php echo $pageTitle ?></title>
</head>

<body>
    <main>

        <div class="startscreen">
            <svg class="svg-stable" width="270" height="166" viewBox="0 0 270 166" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="10" y="48" width="250" height="118" rx="5" fill="#7B5F3E" />
                <path d="M26 5C27 2.5 28.2386 0 31 0H240C242.762 0 244 2.5 245 5L270 59C270 61.7614 267.762 64 265 64H5C2.23858 64 6.19888e-06 61.7614 6.19888e-06 59L26 5Z" fill="#CE8D5E" />
                <path d="M98 91C98 88.2386 100.239 86 103 86H163C165.761 86 168 88.2386 168 91V166H98V91Z" fill="#CE8D5E" />
            </svg>
            <svg class="svg-tree1" xmlns="http://www.w3.org/2000/svg" width="126" height="158" fill="none">
                <path fill="#7B5F3E" d="M54.833 83H74l-2.3 27 2.3 48H51l3.833-24.375V83Z" />
                <path fill="#648C4C" d="M73.157 6.796c-18.176-13.172-44.062-4.41-46.472 2.94-21.756 0-27.883 19.406-22.031 31.755-11.016 9.173 0 24.992 7.573 24.992C8.44 80.007 30.587 83.34 41.831 82.948c13.22 14.583 32.13 6.076 39.932 0 22.582 5.88 28.227-11.271 28.227-20.582 20.104-1.646 17.098-18.523 13.081-26.756 6.885-9.643-6.196-22.345-13.081-22.345C101.178-3.906 75.911.915 73.157 6.796Z" />
            </svg>


            <a href="stable.php" class="big-button">GÅ IN I STALLET</a>

            <svg class="svg-tree2" xmlns="http://www.w3.org/2000/svg" width="126" height="158" fill="none">
                <path fill="#7B5F3E" d="M54.833 83H74l-2.3 27 2.3 48H51l3.833-24.375V83Z" />
                <path fill="#648C4C" d="M73.157 6.796c-18.176-13.172-44.062-4.41-46.472 2.94-21.756 0-27.883 19.406-22.031 31.755-11.016 9.173 0 24.992 7.573 24.992C8.44 80.007 30.587 83.34 41.831 82.948c13.22 14.583 32.13 6.076 39.932 0 22.582 5.88 28.227-11.271 28.227-20.582 20.104-1.646 17.098-18.523 13.081-26.756 6.885-9.643-6.196-22.345-13.081-22.345C101.178-3.906 75.911.915 73.157 6.796Z" />
            </svg>

        </div>

    </main>
</body>

</html>
