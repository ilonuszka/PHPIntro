<?php

declare(strict_types=1);

function exercise1(): void
{
    /*
    Įrašykite skaičius nuo 0 iki 10 į failą pavadinimu numbers.txt.
    Kiekvienas skaičius turi būti įrašytas naujoje eilutėje.
    */
    $numbersFile = 'test.txt';
    file_put_contents('test.txt', '');
for ($numbers = 0; $numbers <=10; $numbers++) {
    $content = $numbers.PHP_EOL;
    file_put_contents($numbersFile, $content, FILE_APPEND);
}

}

exercise1();
function exercise2(): void
{
    /*
    Įrašykite visus transporto priemonių pavadinimus į failą vehicles.txt.
    Kiekvienas pavadinimas turi būti įrašytas naujoje eilutėje.
    */

    $vehicles = [
        [
            'type' => 'passenger car',
            'name' => 'Honda Civic',
            'weight' => 1550
        ],
        [
            'type' => 'airplane',
            'name' => 'Boeing 737',
            'weight' => 41410
        ],
        [
            'type' => 'airplane',
            'name' => 'Cessna DC-6',
            'weight' => 1300
        ],
        [
            'type' => 'truck',
            'name' => 'Volvo FH16',
            'weight' => 12500
        ],
        [
            'type' => 'truck',
            'name' => 'MB Actros',
            'weight' => 13000
        ],
        [
            'type' => 'passenger car',
            'name' => 'VW Golf',
            'weight' => 1450
        ],
    ];

    file_put_contents('vehicles.txt', '');
$fileTXT = 'vehicles.txt';
foreach ($vehicles as $car) {
    $content2 =  $car['name'].PHP_EOL;
    file_put_contents($fileTXT, $content2, FILE_APPEND);
}

}

exercise2();

function exercise3(): array
{
    /*
    Perskaitykite visus tr. priemonių pavadinimus iš failo vehicles.txt,
    sudėkite juos į masyva ir grąžinkite iš funkcijos.
    [
        'Honda Civic',
        'Boeing 737',
        ...
    ]
    */
    $fileTEXT = 'vehicles.txt';
    $kintamasis =  file_get_contents($fileTEXT);
   return (explode(PHP_EOL, $kintamasis));

}
print_r(exercise3());

/*
    Užduotis: 4
    Sukurkite naują failą days_until_calculator.php.
    Jį paleidus iš vartotojo turėtų nuskaityti 2 argumentus, vieną po kito:
    php -f days_until_calculator.php
    Event name:
    Event date (YYYY-MM-DD):
    Pavyzdys:
    php -f days_until_calculator.php
    Event name: birthday
    Event date (YYYY-MM-DD): 2022-06-15
    Event 'birthday' is 97 days away
*/
//echo "please enter your data".PHP_EOL;
//$eventName = readline('Event name');
//$eventDate = readline("Event Date");
//
//echo 'Event' .$eventName . 'is' .$eventDate. 'away';
function exercise5(): void
{
    /*
    Įrašykite visą $vehicles masyvą į failą vehicles_database.json JSON formatu.
    */

    $vehicles = [
        [
            'type' => 'passenger car',
            'name' => 'Honda Civic',
            'weight' => 1550
        ],
        [
            'type' => 'airplane',
            'name' => 'Boeing 737',
            'weight' => 41410
        ],
        [
            'type' => 'airplane',
            'name' => 'Cessna DC-6',
            'weight' => 1300
        ],
        [
            'type' => 'truck',
            'name' => 'Volvo FH16',
            'weight' => 12500
        ],
        [
            'type' => 'truck',
            'name' => 'MB Actros',
            'weight' => 13000
        ],
        [
            'type' => 'passenger car',
            'name' => 'VW Golf',
            'weight' => 1450
        ],
    ];

    $serial = json_encode($vehicles, JSON_PRETTY_PRINT);
    file_put_contents('newCars.json',$serial);
}
exercise5();
function exercise6(): array
{
    /*
    Perskaitykite failo vehicles_database.json turinį, paverskite jį į masyvą ir grąžinkite iš funkcijos.
    */
$dataGET = file_get_contents('newCars.json');
$decode = json_decode($dataGET,true);
    return $decode;

}
//print_r(exercise6());
//exercise6();
function exercise7(): array
{
    $newVehicle = [
        'type' => 'plane',
        'name' => 'Airbus A320',
        'weight' => 39500,
    ];

    /*
    Papildykite vehicles_database.json esantį masyvą nauja tr. priemone.
    Žingsniai:
    - perskaitykite failo vehicles_database.json turinį
    - paverskite turinį į masyvą
    - į masyvą pridėkite naują elementą ($newVehicle)
    - vėl išsaugokite visą masyvą faile vehicles_database.json
    */
    $dataGET = file_get_contents('newCars.json');
    $decode = json_decode($dataGET,true);
    $decode[] =  $newVehicle;
    $serial = json_encode($decode, JSON_PRETTY_PRINT);
    file_put_contents('newCars.json',$serial);
    return $decode;

}
print_r(exercise7());