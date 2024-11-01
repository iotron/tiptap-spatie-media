<?php

namespace Iotronlab\TiptapSpatieMedia\Commands;

use Illuminate\Console\Command;

class TiptapSpatieMediaCommand extends Command
{
    public $signature = 'tiptap-spatie-media';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
