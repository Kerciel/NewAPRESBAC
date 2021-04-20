<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typepiece extends Model
{
    use HasFactory;
    protected $table = 'type_piece_identite';

    protected $fillable = ['libelle'];
}
