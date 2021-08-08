<?php

namespace App\Service\Slots\Board;

use Exception;

/**
 * Class PaylineFormatter
 * @package App\Service\Slots\Board
 */
class PaylineFormatter
{
    /**
     * @param array $paylineNumbers
     * @param int $consecutiveSymbols
     * @return int[]
     * @throws Exception
     */
    public static function format(array $paylineNumbers, int $consecutiveSymbols): array
    {
        if (empty($paylineNumbers)) {
            throw new Exception('Invalid argument exception');
        }

        $key = implode(' ', $paylineNumbers);

        return [$key => $consecutiveSymbols];
    }
}
