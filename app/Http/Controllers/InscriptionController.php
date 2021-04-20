<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inscription;
use App\Models\Civilite;
use App\Models\typepiece;
use App\Models\typevoie;
use App\Models\Pays;
use App\Models\Ville;
use App\Models\Agence;


class InscriptionController extends Controller
{
    
    public function index() {
        return view('predemande');
    }

    public function accueil()
    {
        return view('index');
    }

    public function getalletudiant()
    {
        $etudiant = inscription::where('id', '15205')->get();
        echo $etudiant;
          
    }

    

    public function getidentite(){
        $civilites = Civilite::all();
        $types_piece_identite = typepiece::all();
        $types_voie = typevoie::all();
        $pays = Pays::all();
        $ville = Ville::where('id','>=',10000)->get();
        $agence = Agence::all();
        return view('forms.etudiant', compact('civilites', 'types_piece_identite', 'types_voie', 'pays', 'ville', 'agence'));
    }

    public function gettypepiece()
    {
        $types_piece_identite = typepiece::all();
        return  compact('types_piece_identite');
    }

    public function etudiant(){
        
        return view('forms.etudiant');
    
    }

    
}
