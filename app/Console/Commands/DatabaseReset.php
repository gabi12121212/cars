<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DatabaseReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reseting database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call("migrate:rollback");
        $this->call("migrate");

        dd(1);
        return 0;
    }
}
