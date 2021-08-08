<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolDog;

/**
 * Class SymbolDogTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolDogTest extends TestCase
{
    public function testSymbolDogExist(): void
    {
        $this->assertInstanceOf(SymbolDog::class, new SymbolDog());
    }

    public function testGetSymbol(): void
    {
        $symbolClass = new SymbolDog();
        $this->assertSame('dog', $symbolClass->getSymbol());
    }
}
