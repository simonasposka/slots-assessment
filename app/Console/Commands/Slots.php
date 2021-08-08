<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use JetBrains\PhpStorm\ArrayShape;
use App\Service\Slots\SlotsService;

/**
 * Class Slots
 * @package App\Console\Commands
 */
class Slots extends Command
{
    /**
     * @var string
     */
    protected $name = 'slots';

    /**
     * @var string
     */
    protected $description = 'Run the slots command';

    /**
     * @return array
     * @throws Exception
     */
    #[ArrayShape([
        'board' => 'array',
        'paylines' => 'array',
        'bet_amount' => 'int',
        'total_win' => 'float'
    ])]
    public function __invoke(): array
    {
        $result = SlotsService::getResult();
        echo json_encode($result);
        return $result;
    }
}
