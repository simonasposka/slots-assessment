<?php

namespace App\Service\Slots\Board;

/**
 * Interface BoardInterface
 * @package App\Service\Slots\Board
 */
interface BoardInterface
{
    /**
     * @return array
     */
    public function getBoardSymbols(): array;

    /**
     * @return array
     */
    public function getPaylines(): array;
}
