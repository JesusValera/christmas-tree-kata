<?php

declare(strict_types=1);

namespace ChristmasTreeKata;

class ChristmasTree
{
    private string $tree = '';

    public function print(int $number): string
    {
        if ($number === 0) {
            return $this->tree;
        }

        $this->generateLeaves($number);
        $this->generateBranch($number);

        return $this->tree;
    }

    private function generateLeaves(int $number): void
    {
        for ($columns = 1; $columns <= $number; $columns++) {
            for ($row = 1; $row <= ($number * 2 - 1); $row++) {
                $leftRange = $number - $columns;
                $rightRange = $number + $columns;
                if ($row > $leftRange && $row < $rightRange) {
                    $this->tree .= 'x';
                } else {
                    $this->tree .= ' ';
                }
            }
            $this->tree .= PHP_EOL;
        }
    }

    private function generateBranch(int $number): void
    {
        $this->tree .= str_repeat(' ', $number - 1) . '|';
    }
}
