<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:sayhello';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'say hello every 10 seconds to user';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $required_user = User::where('name', 'testmail')->first();
        $required_user->update(['name'=>'testModified']);
        
    }
}
