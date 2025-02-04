<?php

namespace BinarCode\LaravelSmartChat\Commands;

use Illuminate\Console\Command;

class LaravelSmartChatCommand extends Command
{
    public $signature = 'laravel-smart-chat';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
