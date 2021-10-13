<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Services\Parser;
use Illuminate\Console\Command;

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
        $parser = new Parser("category.csv");

        $categories = $parser->toArray();

        Category::query()->truncate();
        Category::query()->insert($categories);
    }
}
