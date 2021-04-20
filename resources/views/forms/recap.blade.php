	
<h5 class="info-text"> Recapitulatif de la saisie </h5>

  <div id="form-valid-msg" class="alert alert-success" role="alert">
	  <h4 class="alert-heading">Votre création de compte</h4>
	  <p id="valid-msg"></p>
  </div>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Compte</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
			<p><label>Login : </label> <span class="recap" id="login_recap"></span></p>
			<p><label>Email : </label> <span class="recap" id="email_e_recap"></span></p>
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Identité</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Civilité : </label> <span class="recap" id="civilite_e_recap"></span></p>	
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Prénom : </label> <span class="recap" id="prenom_e_recap"></span></p>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Nom : </label> <span class="recap" id="nom_e_recap"></span></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Nom de jeune fille : </label> <span class="recap" id="prenom_e_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Date de naissance : </label> <span class="recap" id="date_naissance_e_recap"></span></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Lieu de naissance : </label> <span class="recap" id="lieu_naissance_e_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Type pièce d'identité : </label> <span class="recap" id="type_piece_e_recap"></span></p>			
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>N° de pièce d'identité : </label> <span class="recap" id="num_piece_e_recap"></span></p>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<p><label>Nationalité : </label> <span class="recap" id="nationalite_e_recap"></span></p>
					</div>
				 </div> 
			</div>
			<div class="row">								
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Numéro INE : </label> <span class="recap" id="numero_ine_e_recap"></span></p>
					</div>
				</div>
			</div>
			<hr>
			<legend >Mes coordonnées</legend>
			<div class="row"> 
				<div class="col-sm-2">
					<div class="form-group">
						<p><label>N° de voie </label> <span class="recap" id="num_voie_e_recap"></span></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Type de voie : </label> <span class="recap" id="type_voie_e_recap"></span></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Nom de la voie  : </label> <span class="recap" id="nom_voie_e_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">  							
				<div class="col-sm-12">
					<div class="form-group">
						<p><label>Complément d'adresse : </label> <span class="recap" id="compl_adresse_e_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">  
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Code Postal / Ville : </label> <span class="recap" id="codepostal_ville_e_recap"></span></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Pays : </label> <span class="recap" id="pays_e_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm">
					<div class="form-group">
						<p><label>Téléphone : </label> <span class="recap" id="telephone_e_recap"></span></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Portable : </label> <span class="recap" id="portable_e_recap"></span></p>
					</div>
				</div>
			</div>
			
			<hr/>
			
			<legend>Informations bancaires</legend>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<p><label>Choix de l'agence : </label> <span class="recap" id="agence_e_recap"></span></p>		
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<p><label>IBAN  : </label> <span class="recap" id="iban_e_recap"></span></p>	
					</div>
				</div>
			</div>

		</div>
      </div>
    </div>
	
	<!-- Parent codem -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Parent codemandeur</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		<!-- codem -->
			<legend >Identité</legend>
			<div class="row">
				<div class="form-group col-sm-3">
					<p><label>Civilité : </label> <span class="recap" id="civilite_co_recap"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Prénom : </label> <span class="recap" id="prenom_co_recap"></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Nom : </label> <span class="recap" id="nom_co_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Date naissance : </label> <span class="recap" id="date_naissance_co_recap"></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Nationalité : </label> <span class="recap" id="nationalite_co_recap"></p>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Type pièce d'indentité : </label> <span class="recap" id="type_piece_co_recap"></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>N° de pièce d'identité : </label> <span class="recap" id="num_piece_co_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Profession: </label> <span class="recap" id="profession_co_recap"></p>
					</div>
				</div>
			</div>
			
  			<legend >Coordonnées</legend>
			<div class="row">
				<div class="col-sm-2">
					<div class="form-group">
						<p><label>N° de  voix : </label> <span class="recap" id="num_voie_co_recap"></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Type de voie : </label> <span class="recap" id="type_voie_co_recap"></p>
					</div>
				</div>
				<div class="col-sm-6 ">
					<div class="form-group">
						<p><label>Nom de la voie : </label> <span class="recap" id="nom_voie_co_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">										
				<div class="col-sm-12">
					<div class="form-group">
						<p><label>Complément d'adresse : </label> <span class="recap" id="complement_adresse_co_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Code postal / Ville : </label> <span class="recap" id="codepostal_ville_co_recap"></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Pays :  </label> <span class="recap" id="pays_co_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Téléphone :</label> <span class="recap" id="telephone_co_recap"></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Portable : </label> <span class="recap" id="portable_co_recap"></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Email : </label> <span class="recap" id="email_co_recap"></p>
					</div>
				</div>
			</div>
		<!--fin codem-->
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Autre parent</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">

		<!--autre parent-->
		<legend >Identité</legend>
			<div class="row">
				<div class="form-group col-sm-3">
					<p><label>Civilité : </label> <span class="recap" id="civilite_r_recap"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Prénom : </label> <span class="recap" id="prenom_r_recap"></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Nom : </label> <span class="recap" id="nom_r_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Date naissance : </label> <span class="recap" id="date_naissance_r_recap"></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Nationalité : </label> <span class="recap" id="nationalite_r_recap"></p>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Type pièce d'indentité : </label> <span class="recap" id="type_piece_r_recap"></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>N° de pièce d'identité : </label> <span class="recap" id="num_piece_r_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Profession: </label> <span class="recap" id="profession_r_recap"></p>
					</div>
				</div>
			</div>
			
  			<legend >Coordonnées</legend>
			<div class="row">
				<div class="col-sm-2">
					<div class="form-group">
						<p><label>N° de  voix : </label> <span class="recap" id="num_voie_r_recap"></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Type de voie : </label> <span class="recap" id="type_voie_r_recap"></p>
					</div>
				</div>
				<div class="col-sm-6 ">
					<div class="form-group">
						<p><label>Nom de la voie : </label> <span class="recap" id="nom_voie_r_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">										
				<div class="col-sm-12">
					<div class="form-group">
						<p><label>Complément d'adresse : </label> <span class="recap" id="complement_adresse_r_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Code postal / Ville : </label> <span class="recap" id="codepostal_ville_r_recap"></p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<p><label>Pays :  </label> <span class="recap" id="pays_r_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Téléphone :</label> <span class="recap" id="telephone_r_recap"></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Portable : </label> <span class="recap" id="portable_r_recap"></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<p><label>Email : </label> <span class="recap" id="email_r_recap"></p>
					</div>
				</div>
			</div>
		<!-- autre parent -->
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Etablissement d'origine</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
		<!--Etablissement origine-->
			<legend >Scolarité en cours</legend>
			<div class="row">	
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Etablissement : </label> <span class="recap" id="etablissement_o_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Academie : </label> <span class="recap" id="academie_o_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Diplôme préparé : </label> <span class="recap" id="diplome_o_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Spécialité : </label> <span class="recap" id="specialite_o_recap"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Moyenne Annuelle : </label> <span class="recap" id="moyenne_annuelle_o_recap"></p>
					</div>
				</div>
			</div>
		<!--fin Etablissement origine-->
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Voeux</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
		<!--Voeux-->
		<legend>Ma situation</legend>
			<div class="row">
				<div class="col-sm-9">
					<p><label>Je suis hors Mayotte ? : </label> <span class="recap" id="radio_hors_mayotte_v_recap"></span></p>	
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<p><label>Boursier national : </label> <span class="recap" id="radio_bourse_v_recap"></span></p>	
			  </div>
			</div>

    		<legend >Vos souhaits pour l'année {{$campagne->nom_campagne}}</legend>
			
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Diplôme envisagé : </label> <span class="recap" id="diplome_v1_recap"></span></p>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Spécialité  : </label> <span class="recap" id="specialite_v1_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Année d'études  : </label> <span class="recap" id="annee_etude_v1_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Etablissement  : </label> <span class="recap" id="etablissement_v1_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Academie  : </label> <span class="recap" id="academie_v1_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Projet d'étude  : </label> <span class="recap" id="projet_etude_v1_recap"></span></p>					
					</div>
				</div>
			</div>
			<hr/>
			
    		<legend >Voeux - 2</legend>
			
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Diplôme envisagé : </label> <span class="recap" id="diplome_v2_recap"></span></p>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Spécialité  : </label> <span class="recap" id="specialite_v2_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Année d'études  : </label> <span class="recap" id="annee_etude_v2_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Etablissement  : </label> <span class="recap" id="etablissement_v2_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Academie  : </label> <span class="recap" id="academie_v2_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Projet d'étude  : </label> <span class="recap" id="projet_etude_v2_recap"></span></p>					
					</div>
				</div>
			</div>
			<hr/>
			
    		<legend >Voeux - 3</legend>
			
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Diplôme envisagé : </label> <span class="recap" id="diplome_v3_recap"></span></p>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Spécialité  : </label> <span class="recap" id="specialite_v3_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Année d'études  : </label> <span class="recap" id="annee_etude_v3_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Etablissement  : </label> <span class="recap" id="etablissement_v3_recap"></span></p>
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Academie  : </label> <span class="recap" id="academie_v3_recap"></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<div class="form-group">
						<p><label>Projet d'étude  : </label> <span class="recap" id="projet_etude_v3_recap"></span></p>					
					</div>
				</div>
			</div>
		<!-- fin voeux -->
		</div>
      </div>
    </div>
  </div> 
