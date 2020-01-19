<?php
$array = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
];
$sameArray = [];
for ($i=1; $i < 10; $i++) { 
    $sameArray[] = $i;
}
display();
if ($array === $sameArray) {
    display('同じ');
}
$array = [
    1 => [
        'english' => 'one',
        'french' => 'uno',
    ],
    2 => [
        'english' => 'two',
        'french' => 'uno',
    ],
    3 => [
        'english' => 'three',
        'french' => 'thuno',
    ],
    4 => [
        'english' => 'four',
        'french' => 'funo',
    ],
    5 => [
        'english' => 'five',
        'french' => 'funo',
    ],
    6 => [
        'english' => 'six',
        'french' => 'uno',
    ],
    7 => [
        'english' => 'seven',
        'french' => 'seuno',
    ],
    8 => [
        'english' => 'eight',
        'french' => 'eiuno',
    ],
    9 => [
        'english' => 'nine',
        'french' => 'nuno',
    ],
];
display();
foreach ($array as $number => $translateArray) {
    display($number . 'の英語は' . $translateArray['english']);
    display($number . 'のフランス語は' . $translateArray['french']);
}
$array = [
    0 => [
        '英語' => 'zero',
        'フランス語' => 'zero',
    ],
    1 => [
        '英語' => 'one',
        'フランス語' => 'uno',
    ],
    2 => [
        '英語' => 'two',
        'フランス語' => 'uno',
    ],
    3 => [
        '英語' => 'three',
        'フランス語' => 'thuno',
    ],
    4 => [
        '英語' => 'four',
        'フランス語' => 'funo',
    ],
    5 => [
        '英語' => 'five',
        'フランス語' => 'funo',
    ],
    6 => [
        '英語' => 'six',
        'フランス語' => 'uno',
    ],
    7 => [
        '英語' => 'seven',
        'フランス語' => 'seuno',
    ],
    8 => [
        '英語' => 'eight',
        'フランス語' => 'eiuno',
    ],
    9 => [
        '英語' => 'nine',
        'フランス語' => 'nuno',
    ],
];
display();
foreach ($array as $number => $translateArray) {
    foreach ($translateArray as $language => $translateWord) {
        display($number . 'の' . $language . 'は' . $translateWord);
    }
}
?>