<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolMonkey;

/**
 * Class SymbolMonkeyTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolMonkeyTest extends TestCase
{
    public function testSymbolMonkeyExist(): void
    {
        $this->assertInstanceOf(SymbolMonkey::class, new SymbolMonkey());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolMonkey();
        $this->assertSame('monkey', $symbolClass->getSymbol());
    }
}
