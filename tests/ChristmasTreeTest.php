<?php

declare(strict_types=1);

namespace ChristmasTreeKataTests;

use ChristmasTreeKata\ChristmasTree;
use PHPUnit\Framework\TestCase;

class ChristmasTreeTest extends TestCase
{
    /**
     * @test
     */
    public function print_empty_tree(): void
    {
        $result = (new ChristmasTree())->print(0);

        self::assertSame('', $result);
    }

    /**
     * @test
     */
    public function print_tree_one_level(): void
    {
        $result = (new ChristmasTree())->print(1);

        self::assertSame(<<<TXT
x
|
TXT, $result);
    }
}
