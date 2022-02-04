<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarModels extends Model
{
    use HasFactory;

    protected $table = 'car_models';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cars_id',
        'model_name'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
