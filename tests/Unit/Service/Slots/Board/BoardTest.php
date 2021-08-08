<?php

namespace Unit\Service\Slots\Board;

use TestCase;
use Exception;
use App\Service\Slots\Board\Board;

/**
 * Class BoardTest
 * @package Unit\Service\Slots\Board
 */
class BoardTest extends TestCase
{
    public function testGetBoardSymbols(): void
    {
        $board = new Board();
        $boardSymbols = $board->getBoardSymbols();
        $this->assertIsArray($boardSymbols);
        $this->assertCount($board::BOARD_SIZE, $boardSymbols);
    }

    /**
     * @throws Exception
     */
    public function testGetPaylines(): void
    {
        $this->assertIsArray((new Board())->getPaylines());
    }
}
