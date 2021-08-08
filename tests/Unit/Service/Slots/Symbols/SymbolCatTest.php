<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolCat;

/**
 * Class SymbolCatTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolCatTest extends TestCase
{
    public function testSymbolCatExist(): void
    {
        $this->assertInstanceOf(SymbolCat::class, new SymbolCat());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolCat();
        $this->assertSame('cat', $symbolClass->getSymbol());
    }
}
