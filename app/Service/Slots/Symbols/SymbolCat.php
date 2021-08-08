<?php

namespace App\Service\Slots\Symbols;

/**
 * Class SymbolCat
 * @package App\Service\Slots\Symbols
 */
class SymbolCat implements SymbolInterface
{
    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return 'cat';
    }
}
