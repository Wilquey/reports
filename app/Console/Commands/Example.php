<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Isolatable;

class Example extends Command implements Isolatable
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example {name} {nickname} {birthdate} {--e|email}';

    /**
     * '?' no final indica que é opicional,
     * '*' no final indica que é um array
     */

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A simple example command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        sleep(3);
        logger('Example command executed');
        $name = $this->argument('name');
        $nickname = $this->argument('nickname');
        $birthdate = $this->argument('birthdate');

        $arguments = $this->arguments();

        $email = $this->option('email');

        // dd($email);

        if ($email) {
            $email = $this->ask('What is your email?');
        }

        logger('Name: ' . $name . ' Nickname: ' . $nickname . ' Birthdate: ' . $birthdate . ' email: ' . $email);
        return Command::SUCCESS;
    }

    public function isolationLockExpiresAt()
    {
        return now()->addMinutes(5);
    }
}
