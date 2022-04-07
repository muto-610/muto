<?php

$memo = [] ;
$memo = '' ;

while(true) {


echo '1. メモする' . PHP_EOL;
echo '2. メモを見る' . PHP_EOL;
echo '3. メモを終わる' . PHP_EOL;
echo '番号を選択してください(1, 2, 3) :';

$num  = trim(fgets(STDIN)) ;

if($num === '1'){
    echo '1. メモする' . PHP_EOL;
    $memo = fgets(STDIN) ;

    echo 'メモしました！' . PHP_EOL;


} elseif($num === '2') {
    echo '2. メモを見る' . PHP_EOL;
    echo  $memo . PHP_EOL;

    echo '------------' . PHP_EOL;


} elseif($num === '3') {
    break ;
}

}
?>
