<?php

namespace Zaratedev\LaravelTinkerServer\Console;

use Clue\React\Stdio\Stdio;
use Illuminate\Console\Command;
use React\EventLoop\Factory;

class TinkerServerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tinker-server';

    /**
     * The console command description.
     *
     * @var string|null
     */
    protected $description;

    public function handle()
    {
        $loop = Factory::create();
        $stdio = new Stdio($loop);

        $stdio->setPrompt('Input > ');

        $stdio->on('data', function ($line) use ($stdio) {
            $line = rtrim($line, "\r\n");

            // Execute
            $stdio->write('Your input: '.$line.PHP_EOL);
        });

        $loop->run();
    }
}
