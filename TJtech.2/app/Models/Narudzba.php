<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narudzba extends Model
{
    use HasFactory;
    protected $table = 'narudzba';
    protected $fillable = [
        'user_id',
        'cijena',
    ];
}
