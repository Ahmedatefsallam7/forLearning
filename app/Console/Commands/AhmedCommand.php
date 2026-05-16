<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature("print-name  {name} {--F|force}")]
#[Description('print user name')]

class AhmedCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Hello ' . $this->argument('name') . ' ' . $this->option('force'));
    }
}
