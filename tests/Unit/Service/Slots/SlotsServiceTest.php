<?php

namespace Unit\Service\Slots;

use App\Service\Slots\SlotsService;
use Exception;
use TestCase;

/**
 * Class SlotsServiceTest
 * @package Unit\Service\Slots
 */
class SlotsServiceTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetResult(): void
    {
        $result = SlotsService::getResult();

        $this->assertIsArray($result);
        $this->assertArrayHasKey('board', $result);
        $this->assertArrayHasKey('paylines', $result);
        $this->assertArrayHasKey('bet_amount', $result);
        $this->assertArrayHasKey('total_win', $result);
    }
}
