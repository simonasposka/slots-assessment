<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolQueen;

/**
 * Class SymbolQueenTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolQueenTest extends TestCase
{
    public function testSymbolQueenExist(): void
    {
        $this->assertInstanceOf(SymbolQueen::class, new SymbolQueen());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolQueen();
        $this->assertSame('Q', $symbolClass->getSymbol());
    }
}
