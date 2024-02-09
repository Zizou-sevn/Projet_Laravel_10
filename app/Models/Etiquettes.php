<?php

namespace App\Models;

use App\Models\Plats;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquettes extends Model
{
    use HasFactory;
    protected $table = "etiquettes";
    protected $primaryKey = "id";

    public function plats()
    {
        return $this->belongsToMany(Plats::class, 'etiquettes_plats', 'etiquettes_id', 'plats_id')->get();
    }
}
