<?php

namespace App\Service\Slots;

use App\Service\Slots\Board\BoardInterface;

/**
 * Class PayoutService
 * @package App\Service\Slots
 */
class PayoutService
{
    protected const PAYOUTS_FOR_CONSECUTIVE_SYMBOLS = [
        3 => 0.2,
        4 => 2,
        5 => 10
    ];

    /**
     * @var BoardInterface
     */
    protected BoardInterface $board;

    /**
     * PayoutService constructor.
     * @param BoardInterface $board
     */
    public function __construct(BoardInterface $board)
    {
        $this->board = $board;
    }

    /**
     * @param int $bet
     * @return int
     */
    public function getPayout(int $bet): int
    {
        $payout = 0;
        $paylines = $this->board->getPaylines();

        foreach ($paylines as $payline) {
            $consecutiveSymbols = array_values($payline)[0];

            if ($consecutiveSymbols > 2) {
                $payout += self::PAYOUTS_FOR_CONSECUTIVE_SYMBOLS[$consecutiveSymbols] * $bet;
            }
        }

        return $payout;
    }
}
