<fieldset class="form-group col-sm-12">
	<input type="hidden" id="campagne_0" value="{{$campagne->id}}">
	<legend>Scolarité en cours</legend>
		<div class="row">	
			<div class="col-sm-3">
				<div class="form-group">
					<label>Academie : <small class="text-muted">*</small></label>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="form-group">
					<select class="single-input-primary nice-select input-select2 input-no-border academie" name="academie_o" id="academie_o" data-select-table="academie" data-placeholder="Choisir l'academie..." required></select>
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
					<select name="etablissement_o" id="etablissement_o" class="single-input-primary nice-select" title="Choisir un établissement..." required>
						<option value="">Choisir un établissement</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row select2-margin">
			<div class="col-sm-3">
				<div class="form-group">
					<label>Diplôme préparé <small class="text-muted">*</small></label>	
				</div>
			</div>
			<div class="col-sm-9">
				<div class="form-group">
					<select class="single-input-primary nice-select input-select2 input-no-border" name ="diplome_o" id="diplome_o" data-select-table="diplome" data-placeholder="Choisir le type de diplôme..." required></select>
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
				<select class="single-input-primary nice-select input-select2 input-no-border" name ="specialite_o" id="specialite_o" data-select-table="specialite" data-placeholder="Choisir le type de diplôme..." required></select>
				</div>
			</div>
		</div>
		<div class="row select2-margin">
			<div class="col-sm-3">
				<div class="form-group">
					<label>Moyenne Annuelle <small class="text-muted">*</small></label>	
				</div>
			</div>
			<div class="col-sm-9">	
				<div class="form-group">
					<input name="moyenne_annuelle_o" id="moyenne_annuelle_o" type="text" class="single-input-primary nice-select" placeholder="" value ="" required>
				</div>
			</div>
		</div>
</fieldset>
