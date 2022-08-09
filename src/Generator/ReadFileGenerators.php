<?php

namespace App\Generator;

class ReadFileGenerators
{
    private $file;
    public function __construct(string $nameFile)
    {
        $this->file = fopen($nameFile, 'r');
    }

    public function readFile(): iterable
    {
        while(!feof($this->file)) {
            yield fgetcsv($this->file);
        }
    }

    public function __destruct()
    {
       fclose($this->file);
    }
}