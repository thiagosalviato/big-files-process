<?php

use App\Fibers\ReadFileFibers;

require_once '../../vendor/autoload.php';

$reader = new ReadFileFibers('../file.csv');

$fiber = new Fiber(function () use ($reader) {
    return $reader->readFile();
});
echo $fiber->start();
while ($item = $fiber->resume()) {
    printf('%s %d %s', $item[0], $item[1], PHP_EOL);
}

$memory = round(memory_get_peak_usage() / 1024, 0);
$size =round(filesize('../file.csv') / 1024 / 1024, 0);

echo "Memória utilizada: " . $memory . "KB" . PHP_EOL;
echo "Tamanho do arquivo: " . $size . "MB" . PHP_EOL;