<?php
//traccia 1

$age = 30;
$temp = 29.3;
$name = "Stefano";
$dev = true;

// var_dump($age);
// var_dump($temp);
// var_dump($name);
// var_dump($dev);

const AGE = 30;
const TEMP = 29.3;
const NAME = "Stefano";
const DEV = true;

// var_dump(AGE);
// var_dump(TEMP);
// var_dump(NAME);
// var_dump(DEV);

//traccia 2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perché";
$text6 = "text2";
$text7 = "bevuto";
$text8 = "tutto";

echo $text1 . " ". $text2 . " " . $text3 . $text4 . " " . $text2 . " " . $text7 . " " . $text8 . "\n";

//traccia 3
//“Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita“.

$words1 = ['una', 67, 'vita', 'colle', 'mi', 'rosso', 
    ['oscura', 'era', 89, 
        ['mezzo', 
            ['cammin', 'Nel', 
                ['selva', 'la',
                    ['via', 'una', true,
                    ]
                ],
            ]
        ], 'ritrovai', 'per'], 'diritta'];
   
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
     'Virgilio',
     'smarrita',
     'ché'
    ]
   ];


$result =  $words1[6][3][1][1] ." ". $words1[6][3][0] . " del " . $words1[6][3][1][0] . " di " . $words2['elemento2'] ." ". $words1[2] ." ". $words1[4] ." ". $words1[6][4] ." ". $words1[6][5] ." ". $words1[0] ." ". $words1[6][3][1][2][0] ." ". $words1[6][0] . ", " . $words2['elemento3'][2] ." ". $words1[6][3][1][2][1] ." ".$words1[7] ." ". $words1[6][3][1][2][2][0] ." ". $words1[6][1] ." ". $words2['elemento3'][1];

var_dump($result);






?>