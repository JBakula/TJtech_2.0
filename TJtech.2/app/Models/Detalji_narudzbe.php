<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalji_narudzbe extends Model
{
    use HasFactory;
    protected $table = 'detalji_narudzbe';
    protected $fillable = [
        'narudzba_id',
        'proizvod_id',
        'kolicina',
    ];
}
