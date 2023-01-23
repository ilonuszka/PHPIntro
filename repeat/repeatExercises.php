<?php

/*
1. Išspausdinkite kas antrą skaičių nuo 100 iki 500 naudodamiesi for ciklu.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
100
102
103
...
*/
for ($i=100; $i <=500; $i+=2) {
    echo $i.PHP_EOL;
}
/*
2. Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 555 ir grąžinkite tą reikšmę iš funkcijos.
*/
$numbers = [
[0, 1],
[1, 0, 2],
[
0,
[
0, 1, 99,
[
10, 44, 555,
],
],
],
];

print_r($numbers[2][1][3][2]);

/*
3.     Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 55. Jeigu paduotas skaičius mažesnis nei 0,
funkcija paverčia šį skaičių pliusiniu.
Funkcijos kvietimas: exercise10(60)

*/
echo '=============='.PHP_EOL;
function exercise10(int $number) : void {
    if($number < 0) {
        $number = $number * -1;
    }
    for ($i = 1; $i <=$number; $i++ ){
        if ($i % 55 === 0) {
            echo $i.PHP_EOL;
        }
    }
}

exercise10(300);

/*

4.   Išveskite žodžių statistiką.
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
function output (array $words): array
{
foreach ($words as $newWord){
    $result[$newWord]['lenght'] = strlen($newWord);
    $result[$newWord]['vowels'] = substr_count($newWord, 'a')+substr_count($newWord, 'e')+substr_count($newWord, 'i')+
        substr_count($newWord, 'o')+substr_count($newWord, 'u');
        $consonats = ['b', 'c', 'd', 'f', 'g', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'w','z'];
      $result[$newWord]['consonants'] = 0;
        foreach($consonats as $consonant ){
            $result[$newWord]['consonants'] += substr_count($newWord, $consonant);
    };

    $result[$newWord]['starts_with'] = substr($newWord, 0,1);
    $result[$newWord]['ends_with'] = substr($newWord, -1,1);
}
return $result;
}
var_dump(output(['hello', 'you']));
/*
Sis array bus naudojamas 5 ir 6 uzduociai :
*/
$products = [
'products' => [
'Comfy chair' => 'no data',
'Yellow lamp' => [
'price' => 15.3,
'quantity' => 2,
],
'Didzioji sofa' => [
'pavadinimas' => 'Didzioji sofa',
'kaina' => 'trylika eurų'
],
'Softest rug' => [
'price' => 27.3,
'quantity' => 3,
'discount' => 13,
],
'Blue shelf' => [],
],
'cartDiscounts' => [5, 16, 15],
];

//5. Atspausdinkite statistika - pavadinima, kokia kaina ir koks likutis.
//Pvz:. Pavadinimas - Sofa, Kaina - 15.6, Likutis - 2
print_r($products);
foreach ($products['products'] as $key => $value) {
   echo 'Pavadinimas - '.$key. ', ';
   $variable = is_array($value);
   if ($variable === true){
       $hasKeyPrice = array_key_exists( 'price',$value);
       $hasKeyQuantity = array_key_exists( 'quantity',$value);
     if  ($hasKeyPrice) {
         echo 'Kaina - '.$value['price'].', ';
     }
       if  ($hasKeyQuantity) {
           echo 'Likutis - '.$value['quantity'].', ';
       }
   }

//
    echo PHP_EOL;

}

/*
6. Parašykite funkciją kuri priimti prekės pavadinimą ir kokį kiekį norima nusipirkti, jeigu kiekio užtenka mūsų sandelyje (masyve)
tuomet atspausdinama - Jums parduota tokio pavadinimo - PREKES_PAVADINIMAS, prekė, kuri kainuoja - 55.55
Kitu atveju turi buti spausdinama - atsiprasau, bet tokio likucio sandelyje nebeturime.
*/

print_r($products);
function inStock (string $name, int $leftItems, array $products) {

foreach ($products['products'] as $key => $value) {

    $variable = is_array($value);
    if ($variable === true) {
        $hasKeyPrice = array_key_exists('price', $value);
        $hasKeyQuantity = array_key_exists('quantity', $value);
        if ($hasKeyQuantity&&$hasKeyPrice ) {
            if ($key===$name){

                if ((int)$value['quantity']>=$leftItems) {
                    echo 'Jums parduota tokio pavadinimo - '.$key.', prekė, kuri kainuoja '.$value['price'].PHP_EOL;
                }else {
                    echo 'atsiprasau, bet tokio likucio sandelyje nebeturime'.PHP_EOL;
                }
            }
        }


    }
} }
echo '=============================='.PHP_EOL;
inStock('Yellow lamp', 2, $products);
inStock('Softest rug', 3, $products);
inStock('Softest rug', 4, $products);

// XO XO XO