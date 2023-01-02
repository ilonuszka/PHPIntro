<?php

declare(strict_types=1);

function exercise1(): array
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2022 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 12 15:00:12',
        ],
        [
            'name' => 'Cutting board',
            'last_purchase' => '2022 Feb 1 03:15:01',
        ],
    ];

    /*
    Grąžinkite iš funkcijos masyvą tik su tais produktais, kurie paskutinį kartą buvo pirkti einamaisiais metais.
    Ši funkcija turėtų veikti ir bet kuriais ateinančiais metais (2023, 2024 ir t.t.)
    */
 foreach ($products as $value) {
     $date2 = date_create_from_format("Y M d H:i:s", $value['last_purchase']);
     if ($value['last_purchase'] > 2022) {
         echo $value['name'] . ' ' . $date2->format('Y-m-d h:i:s') . PHP_EOL;
     }
 }
    return [];
}
//exercise1();
function exercise2(bool $showOnlyDays): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2022 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 12 15:00:12',
        ],
        [
            'name' => 'Cutting board',
            'last_purchase' => '2022 Feb 1 03:15:01',
        ],
    ];

    /*
    Išspausdinkite paskutinių pirkimų santrauką. Jeigu $showOnlyDays yra true, tuomet rodykite tik dienas.
    Funkcijos kvietimas: exercise11(false)
    Rezultatas:
    Last purchased:
    Wine glass 0 years 1 month 23 days ago
    ...
    Funkcijos kvietimas: exercise11(true)
    Rezultatas:
    Last purchased:
    Wine glass 51 days ago
    ...
    */

    foreach($products as  $value ) {
        $date = new DateTime();
//        $main = date_create_from_format("Y M d H:i:s", $value['last_purchase']);
//        echo "Last purchased:" . PHP_EOL . $value['name'] . ' ' . $main->format('Y m d H:i:s') . PHP_EOL;
        $dateDiff = $date->diff($showOnlyDays);
        if ($dateDiff->format("%R") === '-') {
            echo $dateDiff->format("%d days ago") . PHP_EOL;
        }
    }}
//exercise2(false);
//exercise2(true);
function exercise3(int $numberOfCycles): void
{
    /*
    Išspausdinkite kiek laiko trunka prasukti tuščią ciklą nurodytą kiekį kartų ($numberOfCycles).
    Trukmę apvalinkite iki milisekundžių.
    Pridėkite parametrui $numberOfCycles numatytąją reikšmę 1000000.
    */



//    $start = hrtime(true);
//    $end = hrtime(true);
//     $duration = $end - $start;
//    echo $duration/1000000;
    for ($i = 0; $i < $numberOfCycles; $i++) {
       echo $i.PHP_EOL;
    }
}
$numberOfCycles = 100000;
exercise3($numberOfCycles());