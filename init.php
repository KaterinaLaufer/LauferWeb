<?php
//Подключаем библиотеки
$libDir = array(
    "Laufer" => $_SERVER['DOCUMENT_ROOT'] . '/lib/Laufer/',
    "LauferAPI" => $_SERVER['DOCUMENT_ROOT'] . '/lib/LauferAPI/',
);
foreach ($libDir as $lib => $libPath) {
    $files = scandir($libPath);
    foreach ($files as $libFile) {
        if (file_exists($libPath . $libFile)) {
            include_once($libPath . $libFile);
        }
    }
}