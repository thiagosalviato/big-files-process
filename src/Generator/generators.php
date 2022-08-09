<?php

use App\Generator\ReadFileGenerators;

require_once '../../vendor/autoload.php';

$reader = new ReadFileGenerators('../file.csv');
$content = $reader->lerArquivo();

foreach ($content as $item) {
        printf('%s %d %s', $item[0], $item[1], PHP_EOL);
}

$memory = round(memory_get_peak_usage() / 1024, 0);
$size =round(filesize('../file.csv') / 1024 / 1024, 0);

echo "Required Memory: " . $memory . "KB" . PHP_EOL;
echo "File Size: " . $size . "MB" . PHP_EOL;
