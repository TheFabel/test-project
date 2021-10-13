<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $limit
 * @property int $page
 */
class CategoriesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "limit" => ["required", "int", "min:1"],
            "page"  => ["required", "int", "min:1"]
        ];
    }
}
