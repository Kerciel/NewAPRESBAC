<fieldset class="form-group col-sm-12">
	<legend>C'est ma 1ère demande <small class="text-muted">*</small></legend>
	<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="radio_hors_mayotte_v" id="est_primo_v" value="0">
			<label class="form-check-label" for="est_primo_v"> Je suis à Mayotte </label>
	</div>
	<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="radio_hors_mayotte_v" id="est_pec_v" value="1">
			<label class="form-check-label" for="est_pec_v"> Je suis hors Mayotte </label>
	</div>
</fieldset>

<fieldset class="form-group col-sm-12">
	<legend >Boursier national <small class="text-muted">*</small></legend>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="radio_bourse_v" id="est_boursier_v" value="1">
		<label class="form-check-label" for="est_non_boursier"> Oui </label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="radio_bourse_v" id="est_non_boursier_v" value="0">
		<label class="form-check-label" for="est_non_boursier_v"> Non </label>
	</div>
</fieldset>

<br/>

<fieldset class="form-group col-sm-12">
    <legend >Vos souhaits pour l'année {{$campagne->nom_campagne}}<small class="text-muted"></small></legend>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Diplôme envisagé <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary nice-select input-select2 input-no-border" name="diplome_v1" id="diplome_v1" data-select-table="diplome" data-placeholder="Indiquez le diplôme envisagé..." ></select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Spécialité <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">		
				<select class="single-input-primary nice-select input-select2 input-no-border" name="specialite_v1" id="specialite_v1" data-select-table="specialite" data-placeholder="Choisir la spécilité..." required></select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Année d'études <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary form-select input-select2 input-no-border" name="annee_etude_v1" id="annee_etude_v1" data-select-table="annee_etude" data-placeholder="Choisir l'année d'étude..." required></select>
			</div>
		</div>
		</div>
		<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Academie <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary nice-select input-select2 input-no-border academie" name="academie_v1" id="academie_v1" data-select-table="academie" data-placeholder="Choisir l'academie..." required></select>
			</div>
		</div>
	</div>

	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Etablissement <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select name="etablissement_v1" id="etablissement_v1" class="single-input-primary nice-select" title="Choisir un établissement..." required>
					<option value="">Choisir un établissement</option>
				</select>
			</div>
		</div>
	</div>
	
	<div class="row select2-margin">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Projet d'étude <small class="text-muted">*</small></label>						
				<textarea name="projet_etude_v1" id="projet_etude_v1" type="textrea" class="single-input-primary" rows="5" placeholder="" value ="" required></textarea>
			</div>
		</div>
	</div>
</fieldset>

<hr/>
<!--Voeux 2-->

<fieldset class="form-group col-sm-12">
    <legend >Voeux - 2 <small>(facultatif)</small></legend>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Diplôme envisagé <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary nice-select input-select2 input-no-border" name="diplome_v2" id="diplome_v2" data-select-table="diplome" data-placeholder="Indiquez le diplôme envisagé..."></select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Spécialité <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">		
				<select class="single-input-primary nice-select input-select2 input-no-border" name="specialite_v2" id="specialite_v2" data-select-table="specialite" data-placeholder="Choisir la spécilité..."></select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Année d'études <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary nice-select input-select2 input-no-border" name="annee_etude_v2" id="annee_etude_v2" data-select-table="annee_etude" data-placeholder="Choisir l'année d'étude..."></select>
			</div>
		</div>
	</div>	
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Academie <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary nice-select input-select2 input-no-border academie" name="academie_v2" id="academie_v2" data-select-table="academie" data-placeholder="Choisir l'academie..."></select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Etablissement <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select name="etablissement_v2" id="etablissement_v2" class="single-input-primary nice-select" title="Choisir un établissement...">
					<option value="">Choisir un établissement</option>
				</select>
			</div>
		</div>
	</div>

	<div class="row select2-margin">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Projet d'étude <small class="text-muted">*</small></label>						
				<textarea name="projet_etude_v2" id="projet_etude_v2" type="textrea" class="single-input-primary" rows="5" placeholder="" value =""></textarea>
			</div>
		</div>
	</div>
</fieldset>
<!--/fin voeux 2-->


<hr/>
<!--Voeux 3-->

<fieldset class="form-group col-sm-12">
    <legend >Voeux - 3 <small>(facultatif)</small></legend>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Diplôme envisagé <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary nice-select input-select2 input-no-border" name="diplome_v3" id="diplome_v3" data-select-table="diplome" data-placeholder="Indiquez le diplôme envisagé..."></select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Spécialité <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">		
				<select class="single-input-primary nice-select input-select2 input-no-border" name="specialite_v3" id="specialite_v3" data-select-table="specialite" data-placeholder="Choisir la spécilité..."></select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Année d'études <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary nice-select input-select2 input-no-border" name="annee_etude_v3" id="annee_etude_v3" data-select-table="annee_etude" data-placeholder="Choisir l'année d'étude..."></select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Academie <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select class="single-input-primary nice-select input-select2 input-no-border academie" name="academie_v3" id="academie_v3" data-select-table="academie" data-placeholder="Choisir l'academie..."></select>
			</div>
		</div>
	</div>

	<div class="row select2-margin">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Etablissement <small class="text-muted">*</small></label>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="form-group">
				<select name="etablissement_v3" id="etablissement_v3" class="single-input-primary nice-select" title="Choisir un établissement...">
					<option value="">Choisir un établissement</option>
				</select>
			</div>
		</div>
	</div>
	<div class="row select2-margin">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Projet d'étude <small class="text-muted">*</small></label>						
				<textarea name="projet_etude_v3" id="projet_etude_v3" type="textrea" class="single-input-primary" rows="5" placeholder="" value =""></textarea>
			</div>
	</div>
</fieldset>

<!--/fin voeux 3-->