<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolBird;

/**
 * Class SymbolBirdTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolBirdTest extends TestCase
{
    public function testSymbolBirdExist(): void
    {
        $this->assertInstanceOf(SymbolBird::class, new SymbolBird());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolBird();
        $this->assertSame('bird', $symbolClass->getSymbol());
    }
}
