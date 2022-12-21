<?php

declare(strict_types=1);

namespace ChristmasTreeKata;

class ChristmasTree
{
    public function print(int $number): string
    {
        if ($number === 1) {
            return <<<TXT
x
|
TXT;
        }

        if ($number === 2) {
            return <<<TXT
 x
xxx
 |
TXT;
        }

        return '';
    }
}
