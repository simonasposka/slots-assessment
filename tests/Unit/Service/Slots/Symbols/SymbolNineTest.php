<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolNine;

/**
 * Class SymbolNineTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolNineTest extends TestCase
{
    public function testSymbolNineExist(): void
    {
        $this->assertInstanceOf(SymbolNine::class, new SymbolNine());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolNine();
        $this->assertSame('9', $symbolClass->getSymbol());
    }
}
