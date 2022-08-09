<?php

namespace App\Fibers;

use Fiber;

class ReadFileFibers
{
    private $file;
    public function __construct(string $nameFile)
    {
        $this->file = fopen($nameFile, 'r');
    }

    public function readFile()
    {
        while(!feof($this->read)) {
            Fiber::suspend(fgetcsv($this->read));
        }
    }

    public function __destruct()
    {
       fclose($this->read);
    }
}