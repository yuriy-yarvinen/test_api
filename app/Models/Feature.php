<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    public function restaurant()
    {
        return $this->hasMany(Restaurant::class);
    }
}
