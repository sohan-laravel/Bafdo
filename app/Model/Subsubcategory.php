<?php

namespace App\model;

use App\Model\Subcategory;
use Illuminate\Database\Eloquent\Model;

class Subsubcategory extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function Subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
