<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolKing;

/**
 * Class SymbolKingTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolKingTest extends TestCase
{
    public function testSymbolKingExist(): void
    {
        $this->assertInstanceOf(SymbolKing::class, new SymbolKing());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolKing();
        $this->assertSame('K', $symbolClass->getSymbol());
    }
}
