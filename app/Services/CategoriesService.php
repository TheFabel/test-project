<?php

namespace App\Services;

use App\Models\Category;

class CategoriesService
{
    public function all($limit, $page)
    {
        $offset = $page > 1 ? ($page - 1) * $limit : 0;

        return Category::query()->take($limit)->offset($offset)->get();
    }

    public function count()
    {
        return Category::query()->count();
    }
}
