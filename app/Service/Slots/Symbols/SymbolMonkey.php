<?php

namespace App\Service\Slots\Symbols;

/**
 * Class SymbolMonkey
 * @package App\Service\Slots\Symbols
 */
class SymbolMonkey implements SymbolInterface
{
    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return 'monkey';
    }
}
