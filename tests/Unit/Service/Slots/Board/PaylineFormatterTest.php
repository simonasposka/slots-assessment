<?php

namespace Unit\Service\Slots\Board;

use TestCase;
use Exception;
use App\Service\Slots\Board\PaylineFormatter;

/**
 * Class PaylineFormatterTest
 * @package Unit\Service\Slots\Board
 */
class PaylineFormatterTest extends TestCase
{
    /**
     * @return array[]
     */
    public function validDataProvider(): array
    {
        return [
            [
                [1, 2, 3, 4, 5],
                1,
                [
                    '1 2 3 4 5' => 1
                ]
            ],
            [
                [0, 0, 0, 0, 0],
                5,
                [
                    '0 0 0 0 0' => 5
                ]
            ],
        ];
    }

    /**
     * @param array $paylineNumbers
     * @param int $consecutiveSymbols
     * @param array $expected
     * @dataProvider validDataProvider
     * @throws Exception
     */
    public function testFormat(array $paylineNumbers, int $consecutiveSymbols, array $expected): void
    {
        $this->assertSame($expected, PaylineFormatter::format($paylineNumbers, $consecutiveSymbols));
    }

    /**
     * @return array[]
     */
    public function invalidDataProvider(): array
    {
        return [
            [
                [],
                1,
            ],
        ];
    }

    /**
     * @param array $paylineNumbers
     * @param int $consecutiveSymbols
     * @dataProvider invalidDataProvider
     * @throws Exception
     */
    public function testFormatException(array $paylineNumbers, int $consecutiveSymbols): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Invalid argument exception');
        PaylineFormatter::format($paylineNumbers, $consecutiveSymbols);
    }
}
