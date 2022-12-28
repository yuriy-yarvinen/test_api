<?php

namespace App\Models;

use App\Models\Dishe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    public function dishes()
    {
        return $this->hasMany(Dishe::class);
    }
}
