<?php

namespace App\Service\Slots\Symbols;

/**
 * Class SymbolBird
 * @package App\Service\Slots\Symbols
 */
class SymbolBird implements SymbolInterface
{
    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return 'bird';
    }
}
