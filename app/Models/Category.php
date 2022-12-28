<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
}
