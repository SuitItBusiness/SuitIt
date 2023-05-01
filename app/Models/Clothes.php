<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function event()
    {
        return $this->belongsToMany(Event::class);
    }

    public function recommendation()
    {
        return $this->belongsToMany(Recommendation::class);
    }

    public function wardrobe()
    {
        return $this->belongsToMany(Wardrobe::class);
    }
}
