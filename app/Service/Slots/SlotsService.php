<?php

namespace App\Service\Slots;

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use App\Service\Slots\Board\Board;

/**
 * Class SlotsService
 * @package App\Service\Slots
 */
class SlotsService
{
    /**
     * @return array
     * @throws Exception
     */
    #[ArrayShape([
        'board' => 'array',
        'paylines' => 'array',
        'bet_amount' => 'int',
        'total_win' => 'int'
    ])]
    public static function getResult(): array
    {
        $bet = 100;
        $board = new Board();
        $payout = (new PayoutService($board))->getPayout($bet);

        return [
            'board' => $board->getBoardSymbols(),
            'paylines' => $board->getPaylines(),
            'bet_amount' => $bet,
            'total_win' => $payout
        ];
    }
}
