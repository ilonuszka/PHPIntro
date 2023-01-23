<?php

declare(strict_types=1);

function exercise1(string $stringToSplit, array $delimiters): array
{
    /*
    Funkcija turi priimti string'ą, kuris bus skaidomas,
    bei masyvą segmentų, pagal kuriuos bus skaidoma.
    Kvietimas turi atrodyti taip:
    exercise1('Hello_how_are-you doing?', [' ', '-', '_'])
    Funkcijos outputas turėtų atrodyti taip:
    ['Hello', 'how', 'are', 'you', 'doing?']
    */

    if (count($delimiters)>1)
    for ($i=1;$i<count($delimiters);$i++){
        $stringToSplit = str_replace($delimiters[$i],$delimiters[0],$stringToSplit);
    }

    return explode($delimiters[0],$stringToSplit);
}
print_r(exercise1('Hello_how_are-you doing?', [' ', '-', '_']));
function exercise2(array $words): array
{
    /*
    Sukategorizuokite žodžius pagal jų pradžios simbolį.
    Funkcija kviečiama:
    exercise2(['hello', 'Hickup', '123', 'computer'])
    Funkcijos outputas:
    [
        'h' => ['hello', 'Hickup'],
        '1' => ['123'],
        'c' => ['computer'],
    ]
    */
    $createValue = [];
    foreach ($words as $value) {
        $createValue[substr(strtolower($value), 0, 1)][]= $value;
    }
    return $createValue;
}
var_dump(exercise2(['hello', 'Hickup', '123', 'computer']));
function exercise3(array $words): array
{
    /*
    Išveskite žodžių statistiką.
    Funkcija kviečiama:
    exercise2(['hello', 'you'])
    Funkcijos outputas:
    [
        'hello' => [
            'vowels' => 2,
            'consonants' => 3,
            'length' => 5,
            'starts_with' => h,
            'ends_with' => o,
        ],
        'you' => [
            'vowels' => 3,
            'consonants' => 0,
            'length' => 3,
            'starts_with' => y,
            'ends_with' => u,
        ]
    ]
    */

    return [];
}

function exercise4(): array
{
    /*
    Grąžinkite masyvą, kuris savyje turėtų tik tuos žodžius, kurie arba prasideda, arba baigiasi
    simboliais a, s, b, o
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.io',
        'real@gmail.com',
    ];

    return [];
}