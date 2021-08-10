<?php

setlocale(LC_ALL, array('pt_BR'));
date_default_timezone_set("America/Sao_Paulo");

$months_en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$months_pt = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

$weekdays_en = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$weekdays_pt = array('Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado', 'Domingo');

$current_date = date('l, d \d\e F \d\e Y à\s H:i');

echo "Hello World!" . "<br>";
echo str_ireplace(
    array_merge($months_en, $weekdays_en),
    array_merge($months_pt, $weekdays_pt),
    $current_date
);
