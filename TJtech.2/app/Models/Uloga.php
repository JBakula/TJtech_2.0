<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uloga extends Model
{
    use HasFactory;
    protected $table = 'uloga';
    protected $fillable = [
        'Naziv_uloge',
    ];
}
