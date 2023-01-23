<?php

declare(strict_types=1);

/*
1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
*/
function exercise1(): void
{
$date = new DateTime();
var_dump($date);
}
exercise1();
/*
2. Išspausdinkite datą '2008-12-15 15:15' pasinaudodami funkcija 'date'
*/
function exercise2(): void
{
$date = new DateTime('2008-12-15 15:15');
var_dump($date);
}
exercise2();

/*
3. Išspausdinkite šio momento datą skirtingais formatais, kurie atitiktų pavyzdžius:
- 1970 Mar 1 15:15:00
- 1970 Mar 01 15:15
- 1970 Mar 1st 11:15:00 PM
- 1970/3/1
- savaites numeris (52 savaitės metuose)
- dienos numeris (365 dienos metuose)
*/
function exercise3(): void
{
$date = new DateTime( '1970-03-01 15:15');
//var_dump($date -> format('Y.m.d H:i:s'));
echo $date -> format('Y M d H:i:s').PHP_EOL;
echo $date -> format('Y M d H:i').PHP_EOL;
$date = new DateTime( '1970-03-01 23:15');
echo $date -> format('Y M jS h:i:s A').PHP_EOL;
echo $date -> format('Y/n/j ').PHP_EOL;
echo $date -> format('W').PHP_EOL;
echo $date -> format('z ').PHP_EOL;
}
exercise3();

/*
4. Sukurkite datos objektą iš šių tekstinių datų:
- 2000-03-02 15:30:00
- 2000/02/15 08:30:00 PM
- 2000 March 2nd 15:30:00
*/
function exercise4(): void
{
$date = new DateTime('2000-03-02 15:30:00');
$date1 = new DateTime('2000/02/15 08:30:00 PM');
$date2 = date_create_from_format("Y M jS H:i:s","2000 March 2nd 15:30:00");
echo $date -> format('Y M jS h:i:s A').PHP_EOL;
echo $date1 -> format('Y M jS h:i:s A').PHP_EOL;
echo $date2-> format('Y M jS h:i:s A').PHP_EOL;

}
exercise4();
/*
5. Sukurkite datą iš '15th Jan 2021 8:15:01 PM' (data X). Pamodifikuokite, kad gautumėte:
- datą po 2 savaičių nuo datos X
- datą po 10 metų nuo datos X
- datą prieš 5 valandas nuo datos X
- paskutinę mėnesio dieną
- pirmą mėnesio dieną
- ateinantį antradienį
- datą prieš 1 dieną 8 valandas 15 minučių nuo datos X
*/

function exercise5(): void
{
    echo '==========='.PHP_EOL;
$date = new DateTime('2021-01-15  8:15:01 PM');
echo $date -> format('Y M jS h:i:s A').PHP_EOL;
$date2 = new DateTime('2021-01-15  8:15:01 PM');
$date2 -> modify('-2weeks');
echo $date2 -> format('Y M jS h:i:s A').PHP_EOL;
//echo $date -> modify('-2weeks')-> format('Y M jS h:i:s A').PHP_EOL;
    $date3 = new DateTime('2021-01-15  8:15:01 PM');
$date3 -> modify('-10years');
echo $date3 -> format('Y M jS h:i:s A').PHP_EOL;
    $date4 = new DateTime('2021-01-15  8:15:01 PM');
 $date4 -> modify('-5hours');
echo $date4 -> format('Y M jS h:i:s A').PHP_EOL;
    $date5 = new DateTime('2021-01-15  8:15:01 PM');
$date5 -> modify('last day of this month');
echo $date5 -> format('Y M jS h:i:s A').PHP_EOL;
    $date6 = new DateTime('2021-01-15  8:15:01 PM');
$date6 -> modify('first day of this month');
echo $date6 -> format('Y M jS h:i:s A').PHP_EOL;
    $date7 = new DateTime('2021-01-15  8:15:01 PM');
$date7 -> modify('next Tuesday');
echo $date7 -> format('Y M jS h:i:s A').PHP_EOL;
    $date8 = new DateTime('2021-01-15  8:15:01 PM');
$date8 -> modify('-1day');
echo $date8 -> format('Y M jS h:i:s A').PHP_EOL;

}
exercise5();
function exercise6(): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2021 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 02 15:00:12',
        ],
    ];

    /*
    Išspausdinkite produktų paskutinių pirkimų santrauką:
    Wine glass 2021-01-15 18:34:12
    ...
    */
   foreach($products as $value) {

       $date2 = date_create_from_format("Y M d H:i:s",$value['last_purchase']);
       echo $value['name'].' '. $date2->format('Y-m-d h:i:s').PHP_EOL;

   }
}
exercise6();
function exercise7($date1, $date2): string
{
    /*
    Palyginkite datas ir grąžinkite atsakymą, kuri data naujesnė.

    Funkcijos kvietimas: exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));
    Rezultatas:
    'First date is newer'

    Funkcijos kvietimas: exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));
    Rezultatas:
    'Second date is newer'
    */
if ($date1 <= $date2) {
    echo 'Second date is newer'.PHP_EOL;
}else {
    echo  'First date is newer'.PHP_EOL;
}
    return '';
}
exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));
exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));
function exercise8($date): void
{
    /*
    Išspausdinkite paduotos datos skirtumą nuo dabartinio momento žodžiais.

    Funkcijos kvietimas: exercise8(date_create('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 891 days ago

    Funkcijos kvietimas: exercise8(date_create('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
    $dateNow = new DateTime();
    $dateDiff = $dateNow->diff($date);
    if($dateDiff->format("%R") === '-') {
        echo $dateDiff->format(" Suppled date is %a days ago") . PHP_EOL;
    } else {
        echo $dateDiff->format("Supplied date is %a days in the future") . PHP_EOL;
    }
}
exercise8(date_create('2020-01-25 17:13:25'));
exercise8(date_create('2023-01-25 17:13:25'));
function exercise9($date): void
{
    /*
    Išspausdinkite datų skirtumą žodžiais.

    Funkcijos kvietimas: exercise9(date_create('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 2 years 1 months 11 days

    Funkcijos kvietimas: exercise9(date_create('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
    $dateNow = new DateTime();
    $dateDiff = $dateNow->diff($date);
    if($dateDiff->format("%R") === '-') {
        echo $dateDiff->format(" Suppled date is %y years %m months %d days ago") . PHP_EOL;
    } else {
        echo $dateDiff->format("Supplied date in the future") . PHP_EOL;
    }

}
exercise9(date_create('2020-01-25 17:13:25'));
exercise9(date_create('2023-01-25 17:13:25'));