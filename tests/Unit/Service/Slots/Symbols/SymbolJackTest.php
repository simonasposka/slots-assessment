<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolJack;

/**
 * Class SymbolJackTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolJackTest extends TestCase
{
    public function testSymbolJackExist(): void
    {
        $this->assertInstanceOf(SymbolJack::class, new SymbolJack());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolJack();
        $this->assertSame('J', $symbolClass->getSymbol());
    }
}
