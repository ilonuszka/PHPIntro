<?php

/*
1. Apskaičiuokite PHP pagalba ir išveskite į terminalą. Kiekvienas rezultatas turi būti naujoje eilutėje:
987 + 545 - 32 * 94
32 pakelkite laipsniu 3 ir pridėkite 18
120 padalinkite iš 4 ir dar karta padalinkite iš 3
kokia liekana lieka po skaičiaus 187 dalybos iš 5
skaičiui 3 tris kartus pritaikykite increment operatorių - koki skaičių gaunate?
skaičiui 12 keturis kartus pritaikykite decrement operatorių - koki skaičių gaunate?
*/

//$x = 987;
//$y = $x + 545;
//$z = 32 * 94;
//
//$result = $y - $z;
// echo $x.PHP_EOL;
// echo $y.PHP_EOL;
// echo $z.PHP_EOL;
//
// $pakeltiLaipsniu = 32 ** 3;
//
// $prideti = $pakeltiLaipsniu + 18;
//
// echo $prideti.PHP_EOL;

 $liekana = 187 % 5;

 echo $liekana.PHP_EOL;

//$divide = 120 / 4;
//$divideSum = $divide / 3;
//
//echo $divideSum.PHP_EOL;
//
//
//
//for ( $i = 0; $i <= 3; $i++) {
//    echo $i.PHP_EOL;
//}
//$dicrement = 12;
//
//for ( $i = 1; $i <= 4; $i++) {
//    echo $dicrement-- .PHP_EOL;
//}
//
//





////$number = 0;
////
////for ($number = 0; $number <10; $number++) {
//////    echo $number;
//////    echo PHP_EOL;
//////}
////
////while ($number < 10) {
////    echo $number;
////    echo PHP_EOL;
////    $number++;
////}
////
////do {
////    echo $number;
////    echo PHP_EOL;
////    $number++;
////} while ($number <10);
////
////if ($number <10) {
////    echo $number;
////    echo PHP_EOL;
////}
////
///*3. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
//    Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
//    */
////$start = 15;
////
////for ( $start = 3; $start <= 15; $start++){
////    echo $start;
////    echo PHP_EOL;
////}
///*
//4. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
//Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
//1
//3
//5
//...
//*/
//$startNumber = 1;
//
//for ($startNumber = 1; $startNumber <=10; $startNumber ++){
//    echo $startNumber * 2;
//    echo PHP_EOL;
//}
////5 ir 6
//$nextNumber = 1;
//
//for ($nextNumber= 1; $nextNumber <=20; $nextNumber ++){
//    if (($nextNumber % 3 ==0) || ($nextNumber % 5 ==0))
//    echo $nextNumber . PHP_EOL;
//
//}
///*
//7. Iteruokite per skaičius, nuo 1 iki 20.
//Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
//Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
//Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
//Kitu atveju išspausdinkite skaičių.
//Viskas turi būti atspausdinti vienoje eilutėje su tarpais:
//1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
//*/
$iteracija= 0;

for ($i = 1; $i<=20; $i++) {
    if (($i % 3) === 0) {
        echo "hey";
    }
    if (($i % 5) === 0) {
        echo "ho";
    }
    if ((($i % 3)!==0) && (($i %5) !==0)) {
        echo $i;
    }
    echo " ";
}

//1 / 3 =0 liekana 1
//2/3 = 0 liekana2
//3/5 = 0 liekana 3
//4/5 = 0 liekana 4
//5/5 = 1 liekana 0
////8. Raskite sveikų skaičių nuo 1 iki 100 sumą.
////*/
////
/////*
//$n = 100;
//$sum = 0;
//
//for($i = 1; $i <= $n; $i++)
//    $sum = $sum + $i;
//
//echo "Sum is: $sum".PHP_EOL;
//
//
//////9. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
////monday-tuesday-wednesday-thursday-friday-saturday-sunday-
//////
//
//$days = [
//    'monday',
//    'tuesday',
//    'wednesday',
//    'thursday',
//    'friday',
//    'saturday',
//    'sunday',
//];
//
//foreach($days as $day) {
//    echo $day .PHP_EOL;
//}
//
////10. Iteruokite sveikus skaičius nuo -5 iki 5.
////Išspausdinkite skaičių dvejopai:
////1. Pasinaudojant paprastu echo
////2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę
////-5
////bool(true)
////-4
////bool(true)
////...
////HINT: atkreipkite dėmesį į ką pavirsta skaičius 0
////*/
//
//
//for ($iterate = -5; $iterate <=5; $iterate++) :
//    echo $iterate .PHP_EOL;
//    var_dump((bool) $iterate);
//endfor;