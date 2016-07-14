<?php

namespace JeroenNoten\LaravelCreateAdmin;

use App\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin
        {email : The admin\'s email address}
        {password : The admin\'s password}
        {--name= : The admin\'s name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new administrator user account';

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
        User::create([
            'name' => $this->input->getOption('name') ?: '',
            'email' => $this->input->getArgument('email'),
            'password' => bcrypt($this->input->getArgument('password'))
        ]);

        $this->line('<info>Created a new administrator user account</info>');
    }
}
