<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Services\ProductsService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private ProductsService $products_service;

    public function __construct(ProductsService $products_service)
    {
        $this->products_service = $products_service;
    }

    public function all(ProductsRequest $request)
    {
        $limit = $request->limit;
        $page = $request->page;

        return [
            "count" => $this->products_service->count(),
            "data"  => $this->products_service->all($limit, $page)
        ];
    }
}
