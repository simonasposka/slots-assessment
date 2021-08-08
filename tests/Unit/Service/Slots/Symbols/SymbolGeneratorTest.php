<?php

namespace Unit\Service\Slots\Symbols;

use TestCase;
use App\Service\Slots\Symbols\SymbolGenerator;
use App\Service\Slots\Symbols\SymbolInterface;

/**
 * Class SymbolGeneratorTest
 * @package Unit\Service\Slots\Symbols
 */
class SymbolGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $this->assertInstanceOf(SymbolInterface::class, SymbolGenerator::generate());
    }
}
