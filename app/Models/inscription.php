<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    use HasFactory;
    protected $table = 'etudiant';

    protected $fillable = [
        'matricule',
        'login', 
        'password', 
        'nom',
        'nom_jf', 
        'prenom', 
        'numero_ine',
        'numero_piece_identite',
        'date_naissance',
        'lieu_naissance',
        'email',
        'email_virified_at',
        'num_telephone',
        'num_portable',
        'code_tiers',
        'nationalite_id',
        'civilite_id',
        'type_piece_id'
    ];


}
