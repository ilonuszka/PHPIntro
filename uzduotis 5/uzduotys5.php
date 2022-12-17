<?php



// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/
function dividesBy5 (int $divided) : int {

    return $divided % 5;
}
var_dump(dividesBy5(99));

function divided5 (int $value) : int {
    $result = $value % 5;
    return $result;
}
var_dump(divided5(99));
/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.
Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/
$array = ['some text', 'another text'];
function arrayPrinter ( array $text) : void {
foreach ($text as $item) {
    echo "'". $item ."'";
    echo PHP_EOL;
}
}
arrayPrinter($array);




/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.
Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'
Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/
function stringEnhancer (string $text, string $star = "**") : string {
    return "$star$text$star";

}
$newtext = "some text";
var_dump(stringEnhancer($newtext));
var_dump(stringEnhancer('some text', "#"));



/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.
Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
Funkcija grąžina: funkcija nieko negrąžina
*/


function stringModifier (string &$x, string $y): void{
 $x = $y . $x . $y;
}
$x = 'some text';
stringModifier($x, "#");
echo($x.PHP_EOL);
/*
5. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.
Funkcijos kvietimas:
textReplicator('some_text', 3);
Funkcija grąžina: 'some_text-some_text-some_text'
Funkcijos kvietimas:
textReplicator('some_text', null);
Funkcija grąžina: 'some_text'
*/
function textReplicator (string $text, ?int $number) : string{
    $result = $text;

    if ($number === 0)
        return 1;


    for ($i = 1; $i < $number; $i++){
        $result = $result .'-'.$text;
    }

    return $result;
}

var_dump(textReplicator('someText', 3));
var_dump(textReplicator('someText', null));

/*
6. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/

$anonimine = function(string $text, ?int $number) : string{
    $result = $text;

    if ($number === 0)
        $number = 1;

    for ($i = 1; $i < $number; $i++){
        $result = $result .'-'.$text;
    }

    return $result;
};

var_dump($anonimine('someText', 3));
var_dump($anonimine('someText', null));

function hide ( string $email, int $age) :string {
    if ($age < 17){
        return 'mai@jajaja.lt';
    }
    return $email;
}
var_dump(hide("ilona@hmal.lt", 80));
