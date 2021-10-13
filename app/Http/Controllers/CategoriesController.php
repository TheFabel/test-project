<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Services\CategoriesService;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    private CategoriesService $categories_service;

    public function __construct(CategoriesService $categories_service)
    {
        $this->categories_service = $categories_service;
    }

    public function all(CategoriesRequest $request)
    {
        $limit = $request->limit;
        $page = $request->page;

        return [
            "count" => $this->categories_service->count(),
            "data"  => $this->categories_service->all($limit, $page)
        ];
    }
}
