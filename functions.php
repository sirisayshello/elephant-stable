<?php

declare(strict_types=1);

// Fetching the chosen horse from the given array horses
function getHorseFromHorses(string $selectedHorse, array $horses): array
{

    foreach ($horses as $horse) {
        if ($horse['name'] === $selectedHorse) {
            return $horse;
        }
    }
    // If the horse doesn't exist, default to this one.
    return $horses[0];
};

// Fetching random results when you compete with a horse.
function competeWithHorse(string $horseName): array
{
    $competitionResult =
        [
            ['placed' => 1, 'message' => "VINST! Vilket team! Det behöver firas. Tillbaka till stallet för morötter och tårta till dig och $horseName!"],
            ['placed' => 2, 'message' => "En andraplats, snyggt jobbat!! Du och $horseName verkar vara ett riktigt bra team!"],
            ['placed' => 3, 'message' => "Tjoho, 3:e placering! Du och $horseName verkar vara ett riktigt bra team!"],
            ['placed' => 4, 'message' => "En 4:e placering löste ni galant ju! Klappa om både dig själv och $horseName!"],
            ['placed' => 5, 'message' => "5:e placering, inte dåligt! Klappa om både dig själv och $horseName!"],
            ['placed' => 6, 'message' => "Ja men se där, en 6:e placering! Inte din bästa prestation? Äsch, huvudsaken är att du och $horseName hade kul!"],
            ['placed' => 'Utesluten', 'message' => "Åh nej, du blev utesluten! $horseName kanske hade en dålig dag... Men det var troligtvis ditt fel. Tillbaka till stallet och öva mer!"]
        ];

    $result = $competitionResult[array_rand($competitionResult)];

    return $result;
};


function getHorseAge(int $yearOfBirth): int
{
    $currentYear = (int)date('Y');
    $age = $currentYear - $yearOfBirth;

    return $age;
}
