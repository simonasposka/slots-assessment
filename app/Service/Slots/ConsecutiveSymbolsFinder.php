<?php

namespace App\Service\Slots;

/**
 * Class ConsecutiveSymbolsFinder
 * @package App\Service\Slots
 */
class ConsecutiveSymbolsFinder
{
    /**
     * @param array $symbols
     * @return int
     */
    public static function find(array $symbols): int
    {
        if (empty($symbols)) {
            return 0;
        }

        $count = 1;

        for ($i = 1; $i < count($symbols); $i++) {
            if ($symbols[$i] !== $symbols[0]) {
                break;
            }

            $count++;
        }

        return $count;
    }
}
