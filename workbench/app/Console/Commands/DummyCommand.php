<?php

namespace Workbench\App\Console\Commands;

use Illuminate\Console\Command;

class DummyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sample:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sample command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('It works!');

        return 0;
    }
}
