<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameCar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'destinations_id',
        'receivers_id'
    ];
    public function destination()
    {
        return $this->belongsTo(Destinantion::class);
    }
    public function receiver()
    {
        return $this->belongsTo(receiver::class);
    }
}
