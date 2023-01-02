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
     $year = $date2->format('Y');
     $currentDay = new DateTime();
     $formattedCurrentDay = $currentDay->format('Y');
//     echo $year;
     if ($year === $formattedCurrentDay) {
         echo $value['name'] . ' ' . $date2->format('Y-m-d h:i:s').' ' .PHP_EOL;
         $newArray [] = $value;
     }
     }
    return $newArray;
};
print_r(exercise1());
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
//     $days = '%a days ago';
//     $fullDate = '%y years %m months %d days ago';
     if ($showOnlyDays === true) {
         $days = '%a days ago';
     } else {
         $days = '%y years %m months %d days ago';
     }
     //format yra stringinis dalykas ir mes turime paduoti jam stringa
    foreach($products as  $value ) {
        $date = new DateTime();
        $main = date_create_from_format("Y M d H:i:s", $value['last_purchase']);
        $dateDiff = $date->diff($main);// date interval tipas;
            echo "Last purchased:" . PHP_EOL . $value['name'] . ' ' . $dateDiff->format($days) . PHP_EOL;

        }
    }
//exercise2(false);
//exercise2(true);
function exercise3(int $numberOfCycles): void
{
    /*
    Išspausdinkite kiek laiko trunka prasukti tuščią ciklą nurodytą kiekį kartų ($numberOfCycles).
    Trukmę apvalinkite iki milisekundžių.
    Pridėkite parametrui $numberOfCycles numatytąją reikšmę 1000000.
    */




for ($i = 0; $i < $numberOfCycles; $i++) {
    echo $i.PHP_EOL;

    $start = hrtime(true);
    $end = hrtime(true);
   $duration = $end - $start;
   var_dump($duration/1000000);

    }
}
//exercise3(1000000);