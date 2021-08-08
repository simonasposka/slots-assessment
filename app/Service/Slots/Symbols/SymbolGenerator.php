<?php

namespace App\Service\Slots\Symbols;

/**
 * Class SymbolGenerator
 * @package App\Service\Slots\Symbols
 */
class SymbolGenerator
{
    public const SYMBOLS = [
        SymbolNine::class,
        SymbolTen::class,
        SymbolJack::class,
        SymbolQueen::class,
        SymbolKing::class,
        SymbolAce::class,
        SymbolCat::class,
        SymbolDog::class,
        SymbolMonkey::class,
        SymbolBird::class
    ];

    /**
     * @return SymbolInterface
     */
    public static function generate(): SymbolInterface
    {
        return new (self::SYMBOLS[rand(0, count(self::SYMBOLS) - 1)]);
    }
}
