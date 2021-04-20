<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<fieldset class="form-group col-sm-12">
	<!-- Identité -->
    <legend>Mes informations personnelles</legend>
	<script>
function affiche (){
		let pharagraphe = document.getElementById('paragraphe') ;

let civilite = document.getElementById('civilite_e').value;
let prenom = document.getElementById('prenom_e').value;
let nom =document.getElementById('nom_e').value;
let nom_j= document.getElementById('nomjf_e').value;
let date_naissance= document.getElementById('date_naissance_e').value;

document.getElementById('valid').addEventListener('click', function(e){
			
			let contenu;
			contenu ='<ul>'+ civilite +'</ul>';
			contenu += '<ul>'+prenom + '</ul>';
			contenu += '<ul>'+ nom + '</ul>';
			contenu += '<ul>'+ nom_j + '</ul>';
			contenu += '<ul>'+ date_naissance +'</ul>';

			pharagraphe.innerHTML = contenu;

			console.log('ok');
		
});
}

window.onload=affiche;
	</script>
  	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Civilité <small class="text-muted">*</small></label>	
				<select  name="civilite_e" id="civilite_e" class="single-input-primary nice-select " title="Veuillez choisir une civilté !" required>
					<option value="">Choisir une civilité</option>
					@foreach($civilites as $civilite)
						<option value="{{$civilite->id}}">{{$civilite->abreviation}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Prénom <small class="text-muted">*</small></label>
				<input name="prenom_e" id="prenom_e" type="text" class="single-input-primary" title="le prénom est obligatoire !" placeholder="Saisir votre prénom..." required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Nom <small class="text-muted">*</small></label>
				<input name="nom_e" id="nom_e" type="text" class="single-input-primary" title="le nom est obligatoire !" placeholder="Saisir votre nom..." required>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Nom de jeune fille </label>
				<input name="nomjf_e" id="nomjf_e" type="text" class="single-input-primary"  placeholder="Saisir votre nom de jeune fille...">
			</div>
		</div>
	</div>
	<!-- fin Identité -->
	
	<!-- Identité -->
	
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
            	<label>Date de naissance <small class="text-muted">*</small></label>
            	<input name="date_naissance_e" id="date_naissance_e" type="date"  class="single-input-primary" title="Saisir la date de naissance" placeholder="jj/mm/aaaa" required>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Lieu de naissance <small class="text-muted">*</small></label>
				<input name="lieu_naissance_e" id="lieu_naissance_e" type="text" class="single-input-primary" title="Le lieu de naissance est obligatoire !" placeholder="Paris..." required>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Pièce d'identité <small class="text-muted">*</small></label>			
                <select  name="type_piece_e" id="type_piece_e" class="single-input-primary nice-select" title="Veuillez choisir une pièce d'identité !" required>
                	<option value="">Choisir une pièce d'identité</option>
                 	 @foreach($types_piece_identite as $tpi)
					<option value="{{$tpi->id}}">{{$tpi->libelle}}</option>
					@endforeach
            	</select>
			</div>
		</div>									
		<div class="col-sm-6">
			<div class="form-group">
				<label>N° de pièce d'identité <small class="text-muted">*</small></label>
				<input name="num_piece_e" id="num_piece_e" type="text" class="single-input-primary" title="Le numéro de pièce est obligatoire !" placeholder="14567843567456378" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Nationalité <small class="text-muted">*</small></label>
				<select class="single-input-primary nice-select input-select2 input-no-border" name ="nationalite_e" id="nationalite_e" data-select-table="pays" data-placeholder="Choisir la nationalité..." required>
					<option value="75">France</option>
					<option value="49">Comores</option>
					<option value="">------------------</option>
				</select>
			 </div>
		 </div> 
	</div>
	<div class="row">								
		<div class="col-sm-6">
			<div class="form-group">
				<label>Numéro INE <small class="text-muted">*(Identifiant National Élève)</small></label>
				<input name="numero_ine_e" id="numero_ine_e" type="text" class="single-input-primary" title="Le numéro d'INE est obligatoire !" placeholder="1234567891L" required>
			</div>
		</div>
	</div>
	<input type="button" class="col-sm-6" id="valid" value="valider"/>
</fieldset>

<fieldset class="form-group col-sm-12">
  <legend >Mes coordonnées</legend>
  	<div class="row"> 
		<div class="col-sm-2">
			<div class="form-group">
				<label>N° de voie <small class="text-muted">*</small></label>
				<input name="num_voie_e" id="num_voie_e" type="text" class="single-input-primary" title="Veuillez saisir un numéro de rue !"  placeholder="00" required>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Type de voie<small class="text-muted">*</small></label>			
                <select  name="type_voie_e" id="type_voie_e" class="single-input-primary nice-select" title="Veuillez choisir un type de voie !" required>
                	<option value="">Type de voie</option>
                 	 @foreach($types_voie as $type_voie)
					<option value="{{$type_voie->id}}">{{$type_voie->libelle}}</option>
					@endforeach
            	</select>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Nom de la voie  <small class="text-muted">*</small></label>
				<input name="nom_voie_e" id="nom_voie_e" type="text" class="single-input-primary" title="Veuillez saisir le nom de la voie !"  placeholder="place mariage" required>
			</div>
		</div>
	</div>
	<div class="row">  							
		<div class="col-sm-12">
			<div class="form-group">
				<label>Complément d'adresse : </label>
				<input name="compl_adresse_e" id="compl_adresse_e" type="text" class="single-input-primary" placeholder="complement">
			</div>
		</div>
	</div>
	<div class="row">  
		<div class="col-sm-6">
			<div class="form-group">
				<label>Code Postal / Ville : <small class="text-muted">*</small></label>
				<select class="nice-select input-select2 input-no-border" name="codepostal_ville_e" id="codepostal_ville_e" data-select-table="ville" data-placeholder="Choisir le code postal..." required>
					@foreach ($ville as $vill)
						<option value="{{$vill->id}}">{{ $vill->libelle }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="pays_e">Pays :</label>
				<select type="text" class="single-input-primary" name="pays_e" id="pays_e" value="" >
					@foreach($pays as $pay)	
				<option value="{{$pay->id}}">{{ $pay->libelle }}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm">
			<div class="form-group">
				<label>Téléphone : </label>
				<input name="telephone_e" id="telephone_e" type="text" class="single-input-primary" title="le téléphone est obligatoire !" placeholder="02 69 00 00 00">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Portable :<small class="text-muted">*</small></label>
				<input name="portable_e" id="portable_e" type="text" class="single-input-primary" title="le portable est obligatoire !" placeholder="06 39 00 00 00" required>
			</div>
		</div>
	</div>
 </fieldset>

<fieldset class="form-group col-sm-12">
	<legend >Mes informations bancaires </legend>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Votre agence bancaire <small class="text-muted">*</small></label>			
				<select class="input-select2 input-no-border" name="agence_e" id="agence_e" data-select-table="agence" data-placeholder="Choisir votre agence..." required>
					@foreach($agence as $agenc)
						<option value="{{$agenc->id}}">{{ $agenc->libelle }}</option>	
					@endforeach
				</select>
			</div>
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label>IBAN <small class="text-muted">*</small></label>
				<input name="iban_e" id="iban_e" type="text" class="single-input-primary" title="saisir votre IBAN !" placeholder="FR00 0000 0000 0000 0000 0000 000" required>
			</div>
		</div>
	</div>
</fieldset>


<p name="paragraphe" id="paragraphe"></p>