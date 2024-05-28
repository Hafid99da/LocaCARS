<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primarykey = 'id';

    protected $fillable = [
        "image",
        "brand",
        "model",
        "fuel_type",
        "gearbox",
        "price",
        "available"
    ];
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
    public function available()
    {
        if ($this->available === 1){
            return "Yes";
        }
        else{
            return "No";
        }
    }
}
