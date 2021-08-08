<?php

namespace Unit\Service\Slots;

use TestCase;
use App\Service\Slots\ConsecutiveSymbolsFinder;

/**
 * Class ConsecutiveSymbolsFinderTest
 * @package Unit\Service\Slots
 */
class ConsecutiveSymbolsFinderTest extends TestCase
{
    /**
     * @return array[]
     */
    public function dataProvider(): array
    {
        return [
            [
                [],
                0
            ],
            [
                ['A', '9', '9', '9', '9'],
                1
            ],
            [
                ['A', 'A', '9', '9', '9'],
                2
            ],
            [
                ['A', 'A', 'A', '9', '9'],
                3,
            ],
            [
                ['A', 'A', 'A', 'A', '9'],
                4
            ],
            [
                ['A', 'A', 'A', 'A', 'A'],
                5
            ]
        ];
    }

    /**
     * @param array $symbols
     * @param int $expected
     * @dataProvider dataProvider
     */
    public function testFind(array $symbols, int $expected): void
    {
        $this->assertSame($expected, ConsecutiveSymbolsFinder::find($symbols));
    }
}
