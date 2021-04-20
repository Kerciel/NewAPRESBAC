<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    protected $table = 'ville';

    protected $fillable = ['libelle','code_postal', 'latitude', 'longitude', 'departement_id',];
}
