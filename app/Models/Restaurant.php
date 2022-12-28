<?php

namespace App\Models;

use App\Models\Dishe;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    public function dishes()
    {
        return $this->hasMany(Dishe::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
