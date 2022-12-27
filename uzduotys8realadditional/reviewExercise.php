<?php

declare(strict_types=1);

function exercise1(): int
{
    /*
    Grąžinkite masyvo narių sumą, pakeltą kvadratu
    */
    $numbers = [1, 15, 25, 13, 45, 551, 2];

    $sum = array_sum($numbers);
    return $sum * $sum;
}
var_dump(exercise1());
function exercise2(): array
{
    /*
    Kiekvieną masyvo narį padauginkite iš 15
    Funkcijos outputas:
    [15, 225, 375, ...]
    */
    $numbers = [1, 15, 25, 13, 45, 551, 2];

    foreach ($numbers as $value){
     $newNumbers[] = $value * 15;
 }
    return $newNumbers;
}
var_dump(exercise2());
function exercise3(string $orderDirection): array
{
    /*
    Išmeskite iš masyvo neigiamus skaičius ir juos išrikiuokite didėjimo arba mažėjimo tvarka
    priklausomai nuo $orderDirection reikšmės (ascending arba descending)
    Funkcijos kvietimas: exercise3('descending')
    Funkcijos outputas:
    [15, 3, 1, 0]
    Funkcijos kvietimas: exercise3('ascending')
    Funkcijos outputas:
    [0, 1, 3, 15]
    */

    return [];
}

function exercise4(int $number): int
{
    /*
    Prie kiekvieno masyvo nario pridėkite skaičių $number ir grąžinkite visų masyvo narių sumą.
    Funkcijos kvietimas: exercise4(9)
    Funkcija grąžina: 715
    */
    $numbers = [1, 15, 25, 13, 45, 551, 2];

    $sum = array_sum($numbers) + $number;

    return $sum;
}
var_dump(exercise4(9));
//function darius(string $text, int $age) : void{
//
//
//    echo "darius  myli " .$text . $age;
//}
//
//darius('ilons', 3);
function exercise5(int $number): void
{
    /*
    Išspausdinkite skaičius, kurie prasideda nuo $number ir mažėja arba didėja iki 0, per du skaitmenis.
    Funkcijos kvietimas: exercise5(5)
    Funkcija spausdina:
    5
    3
    1
    0
    Funkcijos kvietimas: exercise5(-5)
    Funkcija spausdina:
    -5
    -3
    -1
    0
    */
    if ($number > 0) {
    for ($num = $number; $num > 0; $num-=2) {
        //if ($num % 2)
            echo $num.PHP_EOL;
    } }
    if ($number < 0) {
    for ($num = $number; $num< 0; $num+=2) {
        //if ($num % 2)
            echo $num.PHP_EOL;

    }}
echo 0;
}
var_dump(exercise5(5));
function exercise6(array $numbers): array
{
    /*
    Apskaičiuokite skaičių masyvo statistiką.
    Jeigu tarp paduotų skaičių yra neigiamų skaičių arba 0, juos ignoruokite.
    Funkcijos kvietimas: exercise6([1, 3, 40])
    Funkcija grąžina:
    [
        'suma' => 44,
        'sandauga' => 120,
        'vidurkis' => 14.66,
        'maksimumas' => 40,
        'minimumas' => 1,
        'skirtumas_max_min' => 39
    ]
    */

    return [];
}

function exercise7($height, $width)
{
    /*
    Parašykite funkciją, kuri išspausdintų nurodytų matmenų bloką.
    Taip pat, pataisykite funkcijos parametrus ir return tipą.
    Funkcijos kvietimas: exercise7(3, 4)
    Funkcija grąžina: funkcija nieko negrąžina, ji tik spausdina:
    [][][][]
    [][][][]
    [][][][]
    */

}


function exercise8(array $items, int $partsCount = 2): array
{
    /*
    Išskaidykite masyvą į nurodytą kiekį dalių.
    Patasykite šios funkcijos 'signature' (parametrus) taip, kad būtų galima ją kviesti nepaduodant
    antrojo parametro $partsCount (2 pavyzdys) ir tokiu atveju masyvas būtų dalinamas į dvi dalis.
    Funkcijos kvietimas:
    exercise8(
        [1, 2, 3, 4, 5, 6, 7],
        4
    )
    Funkcija grąžina:
    [
        [1, 2],
        [3, 4],
        [5, 6],
        [7]
    ]
    Funkcijos kvietimas: exercise8([1, 2, 3, 4, 5, 6, 7])
    Funkcija grąžina:
    [
        [1, 2, 3, 4],
        [5, 6, 7],
    ]
    */

    return [];
}