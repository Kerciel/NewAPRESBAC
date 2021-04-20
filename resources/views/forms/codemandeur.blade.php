
<fieldset class="form-group col-sm-12">
	<blockquote class="codem-blockquote text-center">
	Le codemandeur (pére, mère, tuteur ou tutrice) est la personne co-signataire du dossier de bourse designé par l'etudiant.<br/>
	Ce dossier est signé en triparti entre l'étudiant, le codemandeur et le Conseil Departemental de Mayotte. 
	</blockquote>
</fieldset>

<fieldset class="form-group col-sm-12">
  <legend >Identité</legend>
	<div class="row">
		<div class="form-group col-sm-3">
			<label>Civilité <small>*</small></label>			
            <select  name="civilite_co" id="civilite_co" class="single-input-primary nice-select" title="Veuillez choisir une civilté !" required>
            	<option value="">Civilté</option>
				@foreach($civilites as $civilite)
				<option value="{{$civilite->id}}">{{$civilite->abreviation}}</option>
				@endforeach
        	</select>
		 </div>
	 </div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Prénom <small>*</small></label>
				<input name="prenom_co" id="prenom_co" type="text" class="single-input-primary" title="le prénom est obligatoire !" placeholder="Saisir prénom..." required>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Nom <small>*</small></label>
				<input name="nom_co" id="nom_co" type="text" class="single-input-primary" title="le nom est obligatoire !" placeholder="Saisir nom..." required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
            	<label>Date de naissance <small>*</small></label>
            	<input name="date_naissance_co" id="date_naissance_co" type="date" class="single-input-primary" title="la date de naissance est obligatoire" required>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
            	<label>Nationalité <small>*</small></label>
				<select class="single-input-primary nice-select input-select2 input-no-border" name ="nationalite_co" id="nationalite_co" data-select-table="pays" data-placeholder="Choisir la nationalité..." required>
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
            	<label>Type pièce d'indentité</label>
            	<select  name="type_piece_co" id="type_piece_co" class="single-input-primary nice-select" title="Veuillez choisir une pièce d'identité !" required>
                	<option value="">Choisir une pièce d'identité</option>
                 	 @foreach($types_piece_identite as $tpi)
					<option value="{{$tpi->id}}">{{$tpi->libelle}}</option>
					@endforeach
            	</select>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>N° de pièce d'identité <small>*</small></label>
				<input name="num_piece_co" id="num_piece_co" type="text" class="single-input-primary" title="le lieu de naissance est obligatoire !" placeholder="14567843567456378" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
            	<label>Profession</label>
            	<input name="profession_co" id="profession_co" type="text" class="single-input-primary">
			</div>
		</div>
	</div>
</fieldset>

<fieldset class="form-group col-sm-12">
  <legend >Coordonnées</legend>
	<div class="row">
		<div class="col-sm-2">
			<div class="form-group">
				<label>N° de voie : <small>*</small></label>
				<input name="num_voie_co" id="num_voie_co" type="text" class="single-input-primary" title="Veuillez saisir un numéro de rue !"  placeholder="00" required>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Type de voie :<small>*</small></label>			
				<select name="type_voie_co" id="type_voie_co" class="single-input-primary nice-select" title="Veuillez choisir un type de voie !" required>
					<option value="">Type de voie</option>
					@foreach($types_voie as $type_voie)
					<option value="{{$type_voie->id}}">{{$type_voie->libelle}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-sm-6 ">
			<div class="form-group">
				<label>Nom de la voie : <small>*</small></label>
				<input name="nom_voie_co" id="nom_voie_co" type="text" class="single-input-primary" title="saisir le nom de la voie !"  placeholder="place mariage" required>
			</div>
		</div>
	</div>
	<div class="row">										
		<div class="col-sm-12">
			<div class="form-group">
				<label>Complément d'adresse : </label>
				<input name="complement_adresse_co" id="complement_adresse_co" type="text" class="single-input-primary" placeholder="complement">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Code postal / Ville : <small>*</small></label>
				<select class="single-input-primary nice-select input-select2 input-no-border" name="codepostal_ville_co" id="codepostal_ville_co" data-select-table="ville" data-placeholder="Choisir le code postal..." required></select>

			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Pays :  <small>*</small></label>
				<input type="text" class="single-input-primary" name="pays_co" id="pays_co" value="" disabled>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label>Téléphone :<small></small></label>
				<input type="text"  name="telephone_co" id="telephone_co" class="single-input-primary telco" title="" placeholder="02 69 00 00 00">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Portable :<small>*</small></label>
				<input type="text" name="portable_co" id="portable_co" class="single-input-primary telco" title="Le numéro de portable est obligatoire !" placeholder="06 39 00 00 00">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Email : <small></small></label>
				<input type="email" name="email_co" id="email_co" class="single-input-primary" title="" placeholder="abcd@mail.com">
			</div>
		</div>
	</div>
</fieldset>

<fieldset class="form-group col-sm-12">
	<legend >Ressources</legend>
	<div class="row">
		<div class="form-group col-sm-4 ">
			<label >Resources  annuelles<small>* :Impôts N-1 </small></label>
			<input type="text" class="single-input-primary" id="ressources_codemandeur_co" name="ressources_codemandeur_co" title="Indiquez les resources du codemandeur !!" placeholder="0.00" required>
		</div>
	</div>
</fieldset>