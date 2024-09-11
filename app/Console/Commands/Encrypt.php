<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Encrypt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'encrypt {text}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt string';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info(lock($this->argument('text')));
    }
}
