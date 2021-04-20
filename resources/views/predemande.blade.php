

@section('content')
<section class="content">
    <div class="container-fluid">
	
	@section('content')
	<!--   Big container   -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<!--      Wizard container        -->
				<div class="wizard-container">

					<div class="card wizard-card" data-color="blue" id="wizardProfile">
							
						    <form action="{{route('etudiant.createEtudiantDemande')}}" method="post">
								{{ csrf_field() }}
								<input type="hidden" id="route_select2" value="{{route('etudiant.retrieveDataSelect2', ['table' => '##table##'])}}">
								<input type="hidden" id="route_pays" value="{{route('etudiant.retrievePays', ['ville_id' => '##ville_id##'])}}">
								<input type="hidden" id="route_etablissement" value="{{route('etudiant.retrieveEtablissement', ['academie_id' => '##academie_id##'])}}">
								<input type="hidden" id="route_login" value="{{route('etudiant.loginEmail')}}">
								<input type="hidden" id="campagne_id_v1" name="campagne_id_v1" value="{{$campagne->id}}">
								
							<div class="wizard-header text-center">
								<h3 class="wizard-title">Ma première demande - création de compte</h3>
								<p class="category">Mon identité</p>
							</div>

							<div class="wizard-navigation">
								<div class="progress-with-circle">
									 <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
								</div>
								<ul>
									<li>
										<a href="#compte" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-settings"></i>
											</div>
											Compte
										</a>
									</li>
									<li>
										<a href="#etudiant" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-user"></i>
											</div>
											Identité
										</a>
									</li>
									<li>
										<a href="#codemandeur" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-user"></i>
											</div>
											Codemendeur
										</a>
									</li>
									<li>
										<a href="#responsable" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-user"></i>
											</div>
											Autre parent
										</a>
									</li>
									<li>
										<a href="#etablissement" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-settings"></i>
											</div>
											Etablissement actuel
										</a>
									</li>
									<li>
										<a href="#voeux" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-write"></i>
											</div>
											Voeux
										</a>
									</li>
									<li>
										<a href="#recap" data-toggle="tab">
											<div class="icon-circle">
												<i class="ti-folder"></i>
											</div>
											Recapitulatif
										</a>
									</li>
								</ul>
							</div>

							<div class="tab-content">
								<p id="message-head" class="text-center">
								<blockquote class="blockquote text-center">
								<span aria-hidden="true" class="fa fa-info-circle f-size-16"></span> ATTENTION : Les fausses informations seront pénalisées et la demande sera annulée pour toujours.
								Les champs marqués d'un astérisque* sont obligatoires.
								</blockquote>
								</p>
								<div class="tab-pane" id="compte">@include('forms.compte')</div>	
								<div class="tab-pane" id="etudiant">@include('forms.etudiant')</div>
								<div class="tab-pane" id="codemandeur">@include('forms.codemandeur')</div>
								<div class="tab-pane" id="responsable">@include('forms.responsable')</div>
								<div class="tab-pane" id="etablissement">@include('forms.etablissement_origine')</div>
								<div class="tab-pane" id="voeux">@include('forms.voeux')</div>
								<div class="tab-pane" id="recap">@include('forms.recap')</div>		 
								<div class="wizard-footer">
									<div class="pull-right">
										<input type="button" class="btn btn-next btn-fill btn-info btn-wd" id="btnNext"name="next" value="Suivant" />
										<input type="button" class="btn btn-finish btn-fill btn-info btn-wd" id="valider" name="valider" value="Valider" />
									</div>

									<div class="pull-left">
										<input type="button" class="btn btn-previous btn-default btn-wd" id="btnPrevious" name="previous" value="Précédent" />
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</form>

					</div>
				</div> <!-- wizard container -->
			</div>
		</div><!-- end row -->
	</div> <!--  big container -->
	@endsection

	@section('scripts')
		<!--   Core JS Files   -->
		<script type="text/javascript"  src="{{ asset('js/jquery/jquery.min.js') }}"></script>
		<script type="text/javascript"  src="{{ asset('js/wizard/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript"  src="{{ asset('js/wizard/js/jquery.bootstrap.wizard.js') }}"></script>


		
		<script type="text/javascript"  src="{{ asset('js/wizard/js/jquery.validate.min.js') }}"></script>		
		<script type="text/javascript" src="{{ asset('js/select2/js/select2.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/select2/js/i18n/fr.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/mask/jquery.mask.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/front/app.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/front/rules.js') }}"></script>
		
		<script type="text/javascript" src="{{ asset('js/front/iban.js') }}"></script>
		
		
		
		
	@endsection


 
