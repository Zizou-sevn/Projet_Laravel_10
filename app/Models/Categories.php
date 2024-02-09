<?php

namespace App\Models;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = "Categories";
    protected $primaryKey = "id";

    public function plats()
    {
        return $this->hasMany(Plats::class, 'categories_id','id')->get();
    }
}
