<?php

namespace App\Models;

use App\Models\Etiquettes;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plats extends Model
{
    use HasFactory;

    protected $table = "Plats";
    protected $primaryKey = "id";

    public function categories()
    {
         return $this->belongsTo(Categories::class, 'categories_id','id')->get();
    }

    public function etiquettes()
    {
        return $this->belongsToMany(Etiquettes::class, 'etiquettes_plats', 'etiquettes_id', 'plats_id')->get();
    }
}
