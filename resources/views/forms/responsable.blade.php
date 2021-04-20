
<div class="row">
	<div class="form-group col-sm-12">
		<h5 class="info-text">Souhaitez vous ajouter un autre représentant légal ?</h5>
		<fieldset class="form-group col-sm-12">
			<div class="form-group">
				<select  name="autresparent" id="autresparent" class="single-input-primary nice-select" title="Choix d'un second parents !" required>
				<option value="">Choisir d'enregistrer un autre parent</option>
				<option value="oui">OUI</option>
				<option value="non">NON</option>
				</select>
			</div>
		</fieldset>
	</div>
</div>
<div class="autreparent">
	<div class="row">
	
	<fieldset class="form-group col-sm-12">
			<blockquote class="generic-blockquote text-muted"> Le représentant légal (pére, mère, tuteur, tutrice) doit absolument être différent du codemandeur </blockquote>
	</fieldset>

	<fieldset class="form-group col-sm-12">
	  <legend >Identité</legend>
		<div class="row">
			<div class="form-group col-sm-3">
				<label>Civilité <small class="text-muted">*</small></label>			
				<select name="civilite_r" id="civilite_r" class="single-input-primary nice-select" title="Veuillez choisir une civilté !" required>
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
					<label>Prénom <small class="text-muted">*</small></label>
					<input name="prenom_r" id="prenom_r" type="text" class="single-input-primary " title="Le prénom est obligatoire" placeholder="Saisir le prénom..." required>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Nom <small class="text-muted">*</small></label>
					<input name="nom_r" id="nom_r" type="text" class="single-input-primary " title="Le nom est obligatoire" placeholder="Saisir le nom..." required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Date de naissance <small class="text-muted">*</small></label>
					<input name="date_naissance_r" id="date_naissance_r" type="date" class="single-input-primary " title="La date de naissance est obligatoire" required>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Nationalité <small class="text-muted">*</small></label>
					<select class="single-input-primary nice-select input-select2 input-no-border" name ="nationalite_r" id="nationalite_r" data-select-table="pays" data-placeholder="Choisir la nationalité..." required></select>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Type pièce d'indentité</label>
					<select name="type_piece_r" id="type_piece_r" class="single-input-primary nice-select" title="Veuillez choisir une pièce d'identité !" required>
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
					<input name="num_piece_r" id="num_piece_r" type="text" class="single-input-primary" title="Le numéro de pièce d'identité est obligatoire !" placeholder="Saisir numéro" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Profession</label>
					<input name="profession_r" id="profession_r" type="text" class="single-input-primary">
				</div>
			</div>
		</div>
	</fieldset>
	
	<fieldset class="form-group col-sm-12">
	  <legend>Coordonnées</legend>

		<div class="row">
			<div class="col-sm-2">
				<div class="form-group">
					<label>N° de voie <small class="text-muted">*</small></label>
					<input name="num_voie_r" id="num_voie_r" type="text" class="single-input-primary" title="saisir un numéro de rue !"  placeholder="00" required>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Type de voie <small class="text-muted">*</small></label>			
					<select name="type_voie_r" id="type_voie_r" class="single-input-primary nice-select" title="Veuillez choisir un type de voie !" required>
						<option value="">Type de voie</option>
						@foreach($types_voie as $type_voie)
						<option value="{{$type_voie->id}}">{{$type_voie->libelle}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-sm-6 ">
				<div class="form-group">
					<label>Nom de la voie <small class="text-muted">*</small></label>
					<input name="nom_voie_r" id="nom_voie_r" type="text" class="single-input-primary" title="Veuillez saisir le nom de la voie !"  placeholder="place mariage" required>
				</div>
			</div>
		</div>
		<div class="row">										
			<div class="col-sm-12">
				<div class="form-group">
					<label>Complément d'adresse </label>
					<input name="complement_adresse_r" id="complement_adresse_r" type="text" class="single-input-primary" placeholder="Complement adresse">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Code postal / Ville <small class="text-muted">*</small></label>
					<select class="single-input-primary nice-select input-select2 input-no-border" name="codepostal_ville_r" id="codepostal_ville_r" data-select-table="ville" data-placeholder="Choisir le code postal..." required></select>

				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Pays  <small class="text-muted">*</small></label>
					<input type="text" class="single-input-primary" name="pays_r" id="pays_r" value="" disabled>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label>Téléphone <small class="text-muted"></small></label>
					<input type="text" name="telephone_r" id="telephone_r" class="single-input-primary" title="" placeholder="02 69 00 00 00">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Portable <small class="text-muted">*</small></label>
					<input type="text" name="portable_r" id="portable_r" class="single-input-primary" title="Le portable est obligatoire !" placeholder="06 39 00 00 00" required>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Email  <small class="text-muted"></small></label>
					<input type="email" name="email_r" id="email_r" class="single-input-primary" title="" placeholder="abcd@mail.com">
				</div>
			</div>
		</div>
	</fieldset>
</div>
</div>