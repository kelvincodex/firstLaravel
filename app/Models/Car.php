<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'year',
        'description'
    ];

    public function carModel()
    {
        return $this->hasMany(CarModels::class);
    }
}
