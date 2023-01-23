<?php

declare(strict_types=1);

/*
1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
"A car is standing in a parkinglot." --> "A car is standing in a"
*/
$regex= '/\w+\W*$/';
$sring = "A car is standing in a parkinglot.";

$result = preg_replace($regex,'', $sring);
var_dump($result);
/*
2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
"+37062345678" - true
"+37012345678" - false
"+3706234567" - false
"+3706234567a" - false
*/
function numero (string $number) : void {
$regex = '/^\+3706\d{7}$/';
$result = preg_match($regex, $number);
if ($result === 1) {
  echo $number.' - true'.PHP_EOL;
} else {
    echo $number.' - false'.PHP_EOL;
}}
numero("+37062345678");
numero("+37012345678");
numero("+3706234567");
numero("+3706234567a");
/*
3. Patobulinkite funkciją (2). Funkcija turėtų galėti patikrinti ir tokius telefono numerius:
"+370 623 45678"
"+370-623-45678"
"+370-623 45678"
"00370 623 45678"

Jeigu telefono numeris validus, iš funkcijos turėtų grįžti tvarkingai suformatuotas telefono numeris:
"+370-623 45678" --> "+37062345678"
 */
echo "===========".PHP_EOL;
function phoneNumber ( string $number) {
    $regex = '/^(\+|00)(370)[ -]?(6\d{2})[ -]?(\d{5}$)/';
    $array = [];
    $result = preg_match($regex, $number, $array);
    if ($result === 1) {
        echo $array[1].$array[2].$array[3].$array[4].' - true'.PHP_EOL;
    } else {
        echo $number.' - false'.PHP_EOL;
}}
phoneNumber("+370 623 45678");
phoneNumber("+370-623-45678");
phoneNumber("+370-623 45678");
phoneNumber("00370 623 45678");
/*
4. Parašykite funkciją, kuri užmaskuotų dalį vartotojo duomenų. Pavardės ir gimimo metų simboliai
turėtų būti pakeisti i simbolius 'X'.
"John Smith, 1979 05 15" --> "John XXXXX, XXXX 05 15"
*/
function hiddenNumbers ( string $number)
{
    $regex = '/^([a-zA-Z]+) ([a-zA-Z]+), (\d{4}) (\d{2}) (\d{2})$/';
    $array = [];
    $result = preg_match($regex, $number, $array);
    $surname = str_pad('',strlen($array[2]), 'X');
    $year = str_pad('',strlen($array[3]), 'X');
    echo $array[1].' ' . $surname. ', ' . $year. ' ' . $array[4]. ' ' . $array[5].PHP_EOL;
}
hiddenNumbers("jonh smith, 1979 05 15");

/*
5. Parašykite funkciją, kuri pravaliduotų IPv4 adresą. IPv4 adresas yra sudarytas iš 4 skaičių, kurių kiekvienas gali
būti nuo 0 iki 255. Skaičiai atskirti taškais.
Pvz.:
255.255.255.255
1.1.0.1
*/
function ipValidate (string $ip) : void {
    $regex = '/^(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]?[0-9])$/';
    $result = preg_match($regex, $ip);
    if ($result === 1) {
        echo $ip.' - is valid'.PHP_EOL;
    } else {
        echo $ip.' - is not valid'.PHP_EOL;
    }}
ipValidate("255.255.255.255");
ipValidate("0.0.0.0");
ipValidate("192.168.8.255");
ipValidate("1.100.200.251");
ipValidate("1.100.200.256");

echo '==================='.PHP_EOL;
function ipValidate2 (string $ip) : void {
    $regex = '/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/';
    $array = [];
    preg_match($regex, $ip, $array);
    $valid = true;
    foreach ($array as $key => $val){
        if ($key!=0)
            if (((int)$val<0)||((int)$val>255)) $valid=false;
    }

    if ($valid === true) {
        echo $ip.' - is valid'.PHP_EOL;
    } else {
        echo $ip.' - is not valid'.PHP_EOL;
    }}
ipValidate2("255.255.255.255");
ipValidate("0.0.0.0");
ipValidate("192.168.8.255");
ipValidate("1.100.200.251");
ipValidate("1.100.200.256");

/*
^(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]?[0-9])$
 */