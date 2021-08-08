<?php

namespace App\Service\Slots\Symbols;

/**
 * Class SymbolDog
 * @package App\Service\Slots\Symbols
 */
class SymbolDog implements SymbolInterface
{
    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return 'dog';
    }
}
