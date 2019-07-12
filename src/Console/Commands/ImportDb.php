<?php
namespace Crisjohn02\Dbimport\Console\Commands;

use Illuminate\Console\Command;

class ImportDb extends Command
{

    protected $signature = 'import:db {db=db.sql}';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $file = $this->argument('db');
        if (! file_exists(base_path($file))) {
            $this->error('SQL file not found!');
        } else {
            shell_exec('mysql --user '. env('DB_USERNAME') .' --password='. env('DB_PASSWORD') .' ' . env('DB_DATABASE') . ' < ' . base_path($file)  . ' 2> /dev/null');
            $this->info('Import successful');
        }
    }
}