<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    public function namecars()
    {
        return $this->hasMany(NameCar::class,'receivers_id');
    }
}
