<?php

$pre_content = file_get_contents('https://picsum.photos/list');
$content = json_decode($pre_content, true);
//var_dump($content);

$arResult = [];
//наполнить массив arResult в цикле ссылками вида https://picsum.photos/300/?image=1083
//где 1083 это id картинки.
//в цикле не должно быть больше 100 элементов
//проверить результат можно на странице gellery.php


$i = 0;

foreach($content as $value) {
    
if ($i<100){
    
    $arResult[] = 'https://picsum.photos/300/?image=' . $value['id'];
}    
    $i++;
}

?>
