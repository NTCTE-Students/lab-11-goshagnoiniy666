<?php

$html = '<div>Пример <b>жирного</b> текста</div>';


$pattern = "/<[^>]+>/";
$tags = [];
preg_match_all($pattern, $html, $tags);
print('Найдены HTML-теги: ' . implode(', ', $tags[0]) . '<br>');
?>