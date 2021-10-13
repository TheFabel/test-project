<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImportCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:import-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import categories from category.csv';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Storage::get("category.csv");
    }
}
