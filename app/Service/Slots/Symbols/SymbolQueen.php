<?php

namespace App\Service\Slots\Symbols;

/**
 * Class SymbolQueen
 * @package App\Service\Slots\Symbols
 */
class SymbolQueen implements SymbolInterface
{
    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return 'Q';
    }
}
