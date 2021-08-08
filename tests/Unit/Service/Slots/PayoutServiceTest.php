<?php

namespace Unit\Service\Slots;

use App\Service\Slots\Board\Board;
use App\Service\Slots\PayoutService;
use TestCase;

/**
 * Class PayoutServiceTest
 * @package Unit\Service\Slots
 */
class PayoutServiceTest extends TestCase
{
    /**
     * @return array[]
     */
    public function dataProvider(): array
    {
        return [
            [
                [['1 2 3 4 5' => 0]],
                0
            ],
            [
                [['1 2 3 4 5' => 1]],
                0
            ],
            [
                [['1 2 3 4 5' => 2]],
                0
            ],
            [
                [['1 2 3 4 5' => 3]],
                20
            ],
            [
                [['1 2 3 4 5' => 4]],
                200
            ],
            [
                [['1 2 3 4 5' => 5]],
                1000
            ],
        ];
    }

    /**
     * @param array $payline
     * @param int $expected
     * @dataProvider dataProvider
     */
    public function testGetPayout(array $payline, int $expected): void
    {
        $board = $this->createMock(Board::class);
        $board->method('getPaylines')->willReturn($payline);

        $payout = (new PayoutService($board))->getPayout(100);
        $this->assertEquals($expected, $payout);
    }
}
