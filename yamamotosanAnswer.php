<?php
$input = '1234';
$answer = '6174';
$answer1 = sameCorrectNumber($input, $answer);
display();
$answer2 = sameNumberCount($input, $answer);
// echo '同じ位置で同じ数：' . $answer1 . PHP_EOL;
// echo '違う位置で同じ数：' . $answer2 . PHP_EOL;
function  display($message = '')
{
    echo $message . PHP_EOL;
}
function sameCorrectNumber(string $input, string $answer) :int
{
    $num = 0;
    // array型に1文字づつ変換
    $inputArray = str_split($input);
    // array型に1文字づつ変換
    $answerArray = str_split($answer);
    // １文字づつループ
    for ($i=0; $i < count($inputArray); $i++) { 
        display('i:' . $i . ', input: ' . $input[$i]);
        display('i:' . $i . ', answer: ' . $answer[$i]);
        // 同じ桁位置で同じ数か比較
        if ($inputArray[$i] === $answerArray[$i]) {
            // 同じであれば+1
            $num++;
        }
        display();
    }
    return $num;
}
function sameNumberCount(string $input, string $answer) :int
{
    $num = 0;
    // array型に1文字づつ変換
    $inputArray = str_split($input);
    // array型に1文字づつ変換
    $answerArray = str_split($answer);
    // １文字づつループ(入力された数字)
    for ($i=0; $i < count($inputArray); $i++) {
        // １文字づつループ(回答の数字)
        display('i:' . $i . ', input: ' . $input[$i]);
        for ($j=0; $j < count($answerArray); $j++) { 
            display('j:' . $j . ', answer: ' . $answer[$j]);
            // 違う桁位置で同じ数か比較
            if ($i !== $j && $inputArray[$i] === $answerArray[$j]) {
                // そうであれば+1
                $num++;
            }
        }
        display();
    }
    return $num;
}