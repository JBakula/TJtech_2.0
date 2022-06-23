<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    use HasFactory;
    protected $table = 'proizvod';
    protected $fillable = [
        'kategorija_id',
        'proizvodjac_id',
        'Model',
        'RAM',
        'CPU',
        'GPU',
        'Memorija',
        'Cijena',
        'Kolicina',

    ];
}
