<?php

namespace App\Service\Slots\Board;

use App\Service\Slots\Symbols\SymbolGenerator;
use App\Service\Slots\Symbols\SymbolInterface;
use App\Service\Slots\ConsecutiveSymbolsFinder;
use Exception;

/**
 * Class Board
 * @package App\Service\Slots\Board
 */
class Board implements BoardInterface
{
    public const BOARD_SIZE = 15;

    protected array $board = [];
    protected array $paylines = [];
    protected bool $hasPaylines = false;

    /**
     * Board constructor.
     */
    public function __construct()
    {
        $this->createBoard();
    }

    /**
     * @return array
     */
    public function getBoardSymbols(): array
    {
        return array_map(function (SymbolInterface $symbol) {
            return $symbol->getSymbol();
        }, $this->board);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getPaylines(): array
    {
        if ($this->hasPaylines) {
            return $this->paylines;
        }

        $paylines = [];
        $paylineOptions = $this->getPaylineOptions();

        foreach ($paylineOptions as $paylineNumbers) {
            $consecutiveSymbols = ConsecutiveSymbolsFinder::find($this->getPaylineSymbols($paylineNumbers));

            if ($consecutiveSymbols > 2) {
                array_push($paylines, PaylineFormatter::format($paylineNumbers, $consecutiveSymbols));
            }
        }

        if (count($paylines) > 0) {
            $this->hasPaylines = true;
            $this->paylines = $paylines;
        }

        return $paylines;
    }

    private function createBoard(): void
    {
        for ($i = 0; $i < self::BOARD_SIZE; $i++) {
            array_push($this->board, SymbolGenerator::generate());
        }
    }

    /**
     * @return int[][]
     */
    private function getPaylineOptions(): array
    {
        return [
            [0, 3, 6, 9, 12],
            [1, 4, 7, 10, 13],
            [2, 5, 8, 11, 14],
            [0, 4, 8, 10, 12],
            [2, 4, 6, 10, 14],
        ];
    }

    /**
     * @throws Exception
     */
    private function getSymbolFromIndex(int $index): string
    {
        if ($index > self::BOARD_SIZE - 1) {
            throw new Exception('Invalid index');
        }

        return $this->board[$index]->getSymbol();
    }

    /**
     * @param int $number
     * @return int
     * @throws Exception
     */
    private function getIndexFromNumber(int $number): int
    {
        $map = [0, 5, 10, 1, 6, 11, 2, 7, 12, 3, 8, 13, 4, 9, 14];

        if ($number > (self::BOARD_SIZE - 1)) {
            throw new Exception('Invalid number');
        }

        return $map[$number];
    }

    /**
     * @param array $paylineNumbers
     * @return array
     * @throws Exception
     */
    private function getPaylineSymbols(array $paylineNumbers): array
    {
        $symbols = [];

        foreach ($paylineNumbers as $number) {
            array_push($symbols, $this->getSymbolFromIndex($this->getIndexFromNumber($number)));
        }

        return $symbols;
    }
}
