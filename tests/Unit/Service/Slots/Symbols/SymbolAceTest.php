<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolAce;

/**
 * Class SymbolAceTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolAceTest extends TestCase
{
    public function testSymbolAceExist(): void
    {
        $this->assertInstanceOf(SymbolAce::class, new SymbolAce());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolAce();
        $this->assertSame('A', $symbolClass->getSymbol());
    }
}
