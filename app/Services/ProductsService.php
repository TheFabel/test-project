<?php

namespace App\Services;

use App\Models\Product;
use App\Models\ProductCategory;

class ProductsService
{
    public function addCategories(int $product_id, array $categories_ids)
    {
        $now = now();
        ProductCategory::query()->insert(collect($categories_ids)->map(fn($category_id) => [
            "category_id" => $category_id,
            "product_id"  => $product_id,
            "created_at"  => $now,
            "updated_at"  => $now]
        )->toArray());
    }

    public function all($limit, $page)
    {
        $offset = $page > 1 ? ($page - 1) * $limit : 0;

        return Product::with(["categories" => fn($query) => $query->select("categories.id", "name")])->take($limit)
            ->offset($offset)->get();
    }

    public function count()
    {
        return Product::query()->count();
    }
}
