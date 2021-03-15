<?php

namespace App\Console\Commands;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class UserCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

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
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('Username');
        $email = $this->ask('Email');
        $password = $this->ask('Password');
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        DB::table('users')->update(['permission' => 2046]);
        $this->comment('User details:');
        $this->comment('User: ' . $name);
        $this->comment('Email:' . $email);
        $this->comment('Password: ' . $password);
        return true;

    }
}
