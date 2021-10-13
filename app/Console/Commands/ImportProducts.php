<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use App\Services\Parser;
use App\Services\ProductsService;
use Illuminate\Console\Command;
use Illuminate\Database\Console\Migrations\MigrateCommand;
use Illuminate\Support\Facades\Artisan;

class ImportProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:import-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected               $description = 'Import products from product.csv';
    private ProductsService $products_service;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ProductsService $products_service)
    {
        $this->products_service = $products_service;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $parser = new Parser("product.csv");

        $products = $parser->toArray();

        $products = collect($products)->map(function(array $product)
        {
            $this->products_service->addCategories($product["id"], explode(",", $product["categories"]));

            unset($product["categories"]);

            return $product;
        })->toArray();

        Product::query()->truncate();
        //        Product::query()->insert($products[0]);
        collect($products)->chunk(500)->each(fn($items) => Product::query()->insert($items->toArray()));
    }
}
