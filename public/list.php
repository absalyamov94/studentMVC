<?php 

// Инициализируем наше приложение
require __DIR__ . '/../bootstrap.php';

// Получаем список объявлений
$students = $student->getAllStudents();

// Вызываем вид, чтобы отобразить их
require __DIR__ . '/../view/list.phtml';