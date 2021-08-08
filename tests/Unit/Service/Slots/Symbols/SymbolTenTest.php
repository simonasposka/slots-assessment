<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolTen;

/**
 * Class SymbolTenTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolTenTest extends TestCase
{
    public function testSymbolTenExist(): void
    {
        $this->assertInstanceOf(SymbolTen::class, new SymbolTen());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolTen();
        $this->assertSame('10', $symbolClass->getSymbol());
    }
}
