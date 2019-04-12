<?php

namespace App\Console;

use Vanilla\Command\Argv;
use Vanilla\Console\Command;

class HelloWorld extends Command
{
    public function handle(Argv $argv)
    {
        $this->info("hello world");
    }
}