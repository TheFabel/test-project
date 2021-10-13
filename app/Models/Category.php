<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        "id",
        "name",
        "url_key",
        "description",
        "image",
        "parent_id",
    ];

    public function child()
    {
        return $this->hasMany(Category::class, "parent_id", "id");
    }
}
