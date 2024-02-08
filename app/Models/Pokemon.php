<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{

    use HasFactory;

    protected $table = 'pokemons';
    protected $fillable = [
        'name',
        'thumb',
        'description',
        'no',
        'type',
        'weakness',
        'strength'
    ];
}
