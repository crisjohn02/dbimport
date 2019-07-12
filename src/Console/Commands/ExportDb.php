<?php
namespace Crisjohn02\Dbimport\Console\Commands;

use Illuminate\Console\Command;

class ExportDb extends Command
{
    protected $signature = "export:db";

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $s = shell_exec('mysqldump --user '. env('DB_USERNAME') .' --password='. env('DB_PASSWORD') .' ' . env('DB_DATABASE') . ' > ' . base_path('db.sql') . ' 2> /dev/null');
        $this->info('Export successful');
    }
}