<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Composer;

class ClearCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all cache and composer dump autoloads';

    /*
     * The Composer class instance.
     *
     * @var \Illuminate\Support\Composer
     */
    protected $composer;

    /**
     * Clear all cache
     *
     * @return void
     */
    public function __construct(Composer $composer)
    {
        parent::__construct();
        $this->composer = $composer;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      
        $this->call('optimize:clear');
        $this->call('config:cache');
        $this->info($this->composer->dumpAutoloads());
    }
}
