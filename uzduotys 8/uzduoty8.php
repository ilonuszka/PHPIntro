<?php

declare(strict_types=1);

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}

function exercise1(array $cities): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
    */
    $result = 0;
 foreach ($cities as $key => $value){
     $result = $result + $value['population'];
 }
    return $result;
}
var_dump(exercise1(getCities()));
function exercise2( array $cities): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
    ir grąžinkite ją iš funkcijos
    */
    $arrayTwo = array_column($cities, 'population');
    $arraySum = array_sum($arrayTwo);
    return $arraySum;
}
var_dump(exercise2(getCities()));
function exercise3( array $cities): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
    */
    function sum(int $carry, array $item)
    {
        $carry += $item['population'];//carry 0 pripliusuoja prie 1 2 3 ir tt elemento
        return $carry;
    }
    $result = array_reduce($cities, "sum", 0);
    return $result;
}
var_dump(exercise3(getCities()));
function exercise4(array $cities): int
{
    /*
    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
    Rinkites sau patogiausią skaičiavimo būdą.
    */
    $result = 0;
    foreach ($cities as $key => $value){
        if($value['population'] > 25000000) {
        $result = $result + $value['population'];
    }}
    return $result;

}
var_dump(exercise4(getCities()));
function exercise5(array $cities): array
{
    /*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
    ]
    */

    foreach ($cities as $key => $value){
        if($value['population'] < 25000000) {
            unset($cities[$key]);
        }}
    return $cities;
}
var_dump(exercise5(getCities()));
function exercise6(): int
{

    /*
    Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
    Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
    Kitoms prekėms taikykite kainą 'priceRegular'.
    Bandykite panaudoti array_* funkcijas.
    */

    $lowPriceItems = ['t-shirt', 'shoes'];

    $orderItems = [
        [
            'name' => 't-shirt',
            'priceRegular' => 15,
            'priceLow' => 13,
            'quantity' => 3,
        ],
        [
            'name' => 'coat',
            'priceRegular' => 74,
            'priceLow' => 60,
            'quantity' => 6,
        ],
        [
            'name' => 'shirt',
            'priceRegular' => 25,
            'priceLow' => 20,
            'quantity' => 2,
        ],
        [
            'name' => 'shoes',
            'priceRegular' => 115,
            'priceLow' => 100,
            'quantity' => 1,
        ],
    ];

    $result = 0;
    foreach ($orderItems as $key => $value){
        if(in_array($value['name'], $lowPriceItems, true) === true)  {
            $result += $value['priceLow']*$value['quantity'];
        } else {
            $result += $value['priceRegular']*$value['quantity'];//carry 0 pripliusuoja prie 1 2 3 ir tt elemento
        }
    }

    return $result;
}

var_dump(exercise6());