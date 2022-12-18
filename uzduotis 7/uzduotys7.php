<?php

declare(strict_types=1);

function exercise1(): array
{
    $products = [
        'item_1' => 'desk',
        'item_2' => 'lamp',
        'item_3' => 'error',
        'item_4' => 'sofa',
        'item_5' => 'error',
    ];

    /*
    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
    */
   foreach ($products as $key => $value) {
       if ($value === 'error') {
           unset($products[$key]);
       }
   }

    return $products;
}
var_dump(exercise1());
function exercise2(int $keyPart)
{
    $products = [
        'product_1' => 'desk',
        'product_2' => 'lamp',
        'product_3' => 'sofa',
    ];

    /*
    Sunaikinkitę reikšmę, kuri atitiktų raktą 'product_' + $keyPart ir grąžinkite pamodifikuotą masyvą.
    Jeigu tokio rakto nėra, gražinkite null. Pridėkite trūkstamą return tipą.
    Funkcijos kvietimas: exercise2(1)
    */
    $myVar = 'product_'.$keyPart; //cia mano nurodytas 3;keypartas
    echo $myVar.PHP_EOL;
    foreach ($products as $key => $value) {
        if ($key === $myVar ){
            unset($products[$myVar]);
            return $products;
        }

    }
    return null;
}
var_dump(exercise2(5));
function exercise3(): array
{
    $transactions = [
        [
            'total' => 200,
            'status' => 'error',
        ],
        [
            'total' => 150,
            'status' => 'completed',
        ],
    ];

    /*
    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
    */
 foreach ($transactions as $key => $value) {
     if($value['status']=== 'error') {
         unset($transactions[$key]);
     }
 }
    return $transactions;
}
var_dump(exercise3());
function exercise4(string $key): string
{
    $products = [
        'product_1' => 'shirt',
        'product_2' => 'trousers',
        'product_98' => 'coat',
    ];
    /*
    Funkcija turi grąžinti reikšmę pagal paduota raktą.
    Jeigu paduotas raktas neegzistuoja $products masyve, gražinkite tekstą 'Item not found'.
    Funkcijos kvietimas: exercise4('product_2')
    */
   foreach ($products as $givenKey => $value){
       if ($givenKey === $key ) {
           return $value;
       }
   }
    return 'item not found';
};
var_dump(exercise4('product_2'));
function exercise5(): array
{
    $transactions = [
        [
            'count' => 2,
            'price' => 13,
        ],
        [
            'count' => 15,
            'price' => 14,
        ],
    ];
    /*
    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą ir pridėkite į
    transakciją su raktu 'total'. Grąžinkite $transactions iš funkcijos.
    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
    Laukiamas rezultatas:
    [
        [
            'count' => 2,
            'price' => 13,
            'total' => 26,
        ],
        ...
    ];
    */
foreach ($transactions as $key => $value) {
       $total = $value['count'] * $value['price'];
       $transactions[$key]["total"] = $total;
       echo $total.PHP_EOL;
}
    return $transactions;
}
var_dump(exercise5());
function exercise6(): array
{
    $currencyRates = [
        'usd' => 1.13,
        'gbp' => 0.83,
    ];

    $transactions = [
        [
            'count' => 2,
            'price' => 3.55
        ],
        [
            'count' => 15,
            'price' => 14.1
        ],
    ];
    /*
    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą visomis valiutomis
    esančiomis kintamajame $currencyRates (taip pat ir bazine valiuta - eur) ir pridėkite į transakciją su raktu 'totals'.
    Apvalinkite dviejų skaitmenų po kablelio tikslumu.
    Grąžinkite pamodifikuotą $transactions masyvą iš funkcijos.
    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
    Valiutų skaičius taip pat gali augti.
    Laukiamas rezultatas:
    [
        [
            'count' => 2,
            'price' => 3.55,
            'totals' => [
                'eur' => ...,
                'usd' => ...,
                'gbp' => ...,
            ],
        ],
        ...
    ];
    */
foreach ($transactions as $key => $value) {
    $eur = $value['count'] * $value['price'];
    $transactions[$key]['EUR'] = round($eur, 2);

    foreach ($currencyRates as $rateKey =>$rateValue) {
        $money = $value['count'] * $value['price']*$rateValue;
        $transactions[$key][$rateKey] = round($money, 2);
        echo 'money '.$money.PHP_EOL;
        echo 'money_rounded '.round($money, 2).PHP_EOL;
    }

}
    return $transactions;
}
//var_dump(exercise6());
print_r(exercise6());
$productCollection = [
        [
        'name' => 'Best sofa',
        'price' => 55,
        ],
    [
        'name' => 'King sofa',
        'price' => 255,
    ],

    ];

function exercise7(array $collection): array
{

    /*
    Funkcijai paduodama produktų kolekcija:
    $productCollection = [
        [
            'name' => 'Best sofa',
            'price' => '55,
        ],

    ];
    exercise7($productCollection);
    Funkcija turi grąžinti performuota kolekciją - 'name' turi tapti kolekcijos elemento raktu:
    [
        'Best sofa' => [
            'price' => '55,
        ],
        ...
    ]
    */
foreach ($collection as $key => $value) {
//    $collection[$key][$value['name']] = [];
    $collection[$key][$value['name']]['price'] = $value['price'];
    unset($collection[$key]['name'],$collection[$key]['price']);
}
    return $collection;
}
//var_dump(exercise7($productCollection));
print_r(exercise7($productCollection));
function exercise8(): array
{
    $products = [
        'desk',
        'lamp',
        'sofa',
        'error',
    ];

    /*
    Išskaidykite produktų pavadinimus į raides.
    [
        'desk' => [
            'd',
            'e',
            's',
            'k',
        ],
        ...
    ]
    */
 foreach ($products as $key => $value) {
     foreach (str_split($value) as $letter) {
         $products[$value][] = $letter;

//         echo $letter.PHP_EOL;
     }
     unset($products[$key]);
 }
    return $products;
}
//var_dump(exercise8());
print_r(exercise8());
function exercise9(): void
{
    $animals = [
        [
            'type' => 'water',
            'name' => 'shark',
        ],
        [
            'type' => 'land',
            'name' => 'chimp',
        ],
        [
            'type' => 'water',
            'name' => 'hippo',
        ],
        [
            'type' => 'water',
            'name' => 'crocodile',
        ],
        [
            'type' => 'land',
            'name' => 'cat',
        ],
        [
            'type' => 'land',
            'name' => 'dog',
        ],
    ];

    /*
    Išspausdinkite gyvūnus sugrupuotus pagal tipą.
    Rezultatas:
    land: chimp dog cat
    water: shark hippo crocodile
    */
}

function getProducts(): array
{
    return [
        'chair' => [
            'type' => 'furniture',
            'name' => 'Best chair',
            'price' => 15,
        ],
        'lamp' => [
            'type' => 'lighting',
            'name' => 'Ultimate lamp',
            'price' => 99,
        ],
        'sofa' => [
            'type' => 'furniture',
            'name' => 'Soft sofa',
            'price' => 350
        ],
    ];
}

function exercise10(): array
{
    $products = getProducts();
    /*
    Į masyvą $products pridėkite naują narį ir grąžinkite naujajį masyvą. Nario 'key' - 'fridge'. Nario reikšmė:
    [
        'type' => 'appliance',
        'name' => 'Coolest fridge',
        'price' => 200,
    ]
    */

    return [];
}

function exercise11(): int
{
    $products = getProducts();
    /*
    Raskite ir grąžinkite visų produktų kainų vidurkį
    */

    return 0;
}

function exercise12(): array
{
    $products = getProducts();
    /*
    Sudėkite visų produktų pavadinimus į masyvą ir jį grąžinkite
    [
        'Best chair',
        'Ultimate lamp',
        'Soft sofa',
    ]
    */

    return [];
}

function exercise13(): void
{
    $products = getProducts();
    /*
    Iteruodami per masyvą išspausdinkite eilutę, kurioje matytusi produkto pavadinimas ir tipas atskirti brūkšneliu:
    Best chair - furniture, Ultimate lamp - lighting, Soft sofa - furniture
    */

}

