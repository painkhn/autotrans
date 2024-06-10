<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'engine',
        'power',
        'transmission',
        'drive',
        'color',
        'rudder',
        'country_id',
        'equipment',
        'generation',
        'description',
        'photo'
    ];
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}
