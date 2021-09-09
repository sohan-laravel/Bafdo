<?php

namespace App\Model;

use App\model\Subsubcategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Subcategories()
    {
        return $this->hasMany(Subcategory::class)->where('status', 1);
    }
    public function Subsubcategories()
    {
        return $this->hasMany(Subsubcategory::class)->where('status', 1);
    }
}
