<?php
$file = fopen('file.csv', 'w');

for ($i = 1; $i < 10_000_000; $i++){
    $name = "Name $i";
    $age = rand(10, 100);
    fputcsv($file, [$name, $age]);
}
fclose($file);