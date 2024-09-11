<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:password {username} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset User Password';

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
        $user = \App\Data\Models\User::where("email", clean($this->argument('username')))->first();
        if (!is_null($user)) {
            $user->password = \Hash::make(clean($this->argument('password')));
            $user->save();

            $this->info("Password Updated.");
        } else {
            $this->info("User not found.");
        }
    }
}
