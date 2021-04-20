/*! =========================================================
 *
 Paper Bootstrap Wizard - V1.0.1
*
* =========================================================
*
* Copyright 2016 Creative Tim (http://www.creative-tim.com/product/paper-bootstrap-wizard)
 *
 *                       _oo0oo_
 *                      o8888888o
 *                      88" . "88
 *                      (| -_- |)
 *                      0\  =  /0
 *                    ___/`---'\___
 *                  .' \|     |// '.
 *                 / \|||  :  |||// \
 *                / _||||| -:- |||||- \
 *               |   | \\  -  /// |   |
 *               | \_|  ''\---/''  |_/ |
 *               \  .-\__  '-'  ___/-. /
 *             ___'. .'  /--.--\  `. .'___
 *          ."" '<  `.___\_<|>_/___.' >' "".
 *         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *         \  \ `_.   \_ __\ /__ _/   .-` /  /
 *     =====`-.____`.___ \_____/___.-`___.-'=====
 *                       `=---='
 *
 *     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 *
 *               Buddha Bless:  "No Bugs"
 *
 * ========================================================= */

// Paper Bootstrap Wizard Functions

searchVisible = 0;
transparent = true;
$(document).ready(function(){

	/*  Activate the tooltips      */
	$('[rel="tooltip"]').tooltip();

	// Code for the Validator
	
	/* **************************** 
	* IA
	*/

	/* ***************************************
	 * Format affichage IBAN
	 */
	$('#iban_e').mask('SS00 0000 0000 0000 0000 0000 A00', {
		placeholder: '____ ____ ____ ____ ____ ____ ___'
	  });

	/* ***************************************
	 * Ajoute la classe form-control au select
	*/
	/*
	$.each($("span.selection"), function() {
		
		$(this).addClass("form-control");
	});
	
	$.each($("select2-selection"), function() {
		
		$(this).css('border-radius','0px');
	});
	*/


	
	var login = $('#login').val();
	var route_login = $('#route_login').val(); //.replace(new RegExp('##login##', 'gm'), login); 

	
	var $validator = $('.wizard-card form').validate({
		rules: {
			login: {
				required: true,
				minlength: 6,
				remote: {
					url: route_login,
					type: "get",
					dataType: "json",
					dataFilter: function(response) {
					return !JSON.parse(response).message;
					}
				},
			},
			password: {
				required: true,
				minlength: 8
			},
			password_confirmation: {
				required: true,
				minlength: 8,
				equalTo: "#password"
			},
			email_e: {
				required: true,
				email: true,
				remote: {
					url: route_login,
					type: "get",
					dataType: "json",
					dataFilter: function(response) {
					return !JSON.parse(response).message;
					}
				},
			},
			confirm_email_e: {
				required: true,
				email: true,
				equalTo: "#email_e"
			},
			prenom_e: {
				required: true,
				minlength: 2
			},
			nom_e: {
				required: true,
				minlength: 2
			},
			portable_e: {
				required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
			},
			portable_co: {
				required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
			},
			iban_e: {
				required: true,
                iban: true
			},
			prenom_co: {
				required: true,
				minlength: 2
			},
			nom_co: {
				required: true,
				minlength: 2
			},
			radio_hors_mayotte_v: {
				required: true,
			},
			radio_bourse_v: {
				required: true,
			},
			agence_e : {
				required: true,
			},
			codepostal_ville_e :{
				required: true,
			},
			codepostal_ville_co :{
				required: true,
			},
			moyenne_annuelle_o :{
				required: true,
			},
			academie_o :{
				required: true,
			},
			etablissement_o :{
				required: true,
			},
			diplome_o :{
				required: true,
			},
			specialite_o :{
				required: true,
			},
			academie_v1 :{
				required: true,
			},
			etablissement_V1 :{
				required: true,
			},
			diplome_v1 :{
				required: true,
			},
			specialite_v1 :{
				required: true,
			},
			annee_etude_v1 :{
				required: true,
			},
			projet_etude_v1 :{
				required: true,
			},
			
		},
		messages: {
			login: {
				required: "Le login est obligatoire",
				minlength: "Le login doit contenir au moins 8 caractères",
				remote : "Il existe déjà un utilisateur avec ce login"
			},
			password: {
			  required: "Le mot de passe est obligatoire",
			  minlength: "Le mot de passe doit contenir au moins 8 caractères"
			},
			password_confirmation: {
			  required: "Champs obligatoire",
			  equalTo: "Les deux mots de passe de correspondent pas"
			},
			email_e: {
			  required: "L'adresse e-mail est obligatoire",
			  email: "Le format de l'adresse email est incorrect",
			  remote : "Il existe déjà un utilisateur avec cet email"
			},
			confirm_email_e: {
			  required: "Champs obligatoire",
			  equalTo: "Les deux adresses emails ne correspondent pas"
			},
			prenom_e: {
				required: "Le champs est obligatoire",
				minlength: "Le prénom doit contenir au moins 2 caractères",
			},
			nom_e: {
				required: "Le champs est obligatoire",
				minlength: "Le nom doit contenir au moins 2 caractères",
			},
			iban_e: {
				required: "L'IBAN est obligatoire",
                iban: "Le format de l'IBAN saisie est incorrect"
			},
			portable_e: {
				required: "Le portable est obligatoire",
                digits: "Le champs ne doit contenir que des chiffres",
                minlength: "10 caractères minimum"
			},
			portable_co: {
				required: "Le portable est obligatoire",
                digits: "Le champs ne doit contenir que des chiffres",
                minlength: "10 caractères minimum"
			},
			prenom_co: {
				required: "Le champs est obligatoire",
				minlength: "Le prénom doit contenir au moins 2 caractères",
			},
			nom_co: {
				required: "Le champs est obligatoire",
				minlength: "Le nom doit contenir au moins 2 caractères",
			},
			radio_hors_mayotte_v: {
				required: "Le champs est obligatoire",
			},
			radio_bourse_v: {
				required: "Le champs est obligatoire",
			},
			agence_e: {
				required: "Le champs est obligatoire",
			},
			codepostal_ville_e :{
				required: "Le champs est obligatoire",
			},
			codepostal_ville_co :{
				required: "Le champs est obligatoire",
			},
			moyenne_annuelle_o :{
				required: "Le champs est obligatoire",
			},
			academie_o :{
				required: "Le champs est obligatoire",
			},
			etablissement_o :{
				required: "Le champs est obligatoire",
			},
			diplome_o :{
				required: "Le champs est obligatoire",
			},
			specialite_o :{
				required: "Le champs est obligatoire",
			},
			academie_v1 :{
				required: "Le champs est obligatoire",
			},
			etablissement_V1 :{
				required: "Le champs est obligatoire",
			},
			diplome_v1 :{
				required: "Le champs est obligatoire",
			},
			specialite_v1 :{
				required: "Le champs est obligatoire",
			},
			annee_etude_v1 :{
				required: "Le champs est obligatoire",
			},
			projet_etude_v1 :{
				required: "Le champs est obligatoire",
			},
			
		}
	  
	});
	
	
	/* ***FINµµµµ IA*/
	
	// Wizard Initialization
	$('.wizard-card').bootstrapWizard({
		'tabClass': 'nav nav-pills',
		'nextSelector': '.btn-next',
		'previousSelector': '.btn-previous',

		onNext: function(tab, navigation, index) {
			
			var $valid = $('.wizard-card form').valid();
			if(!$valid) {
				$validator.focusInvalid();
				return false;
			}
			
			getRecap();
		},

		onInit : function(tab, navigation, index){

		  //check number of tabs and fill the entire row
		  var $total = navigation.find('li').length;
		  $width = 100/$total;

		  navigation.find('li').css('width',$width + '%');

		},

		onTabClick : function(tab, navigation, index){

			var $valid = $('.wizard-card form').valid();

			if(!$valid){
				return false;
			} else{
				getRecap();
				return true;
			}

		},

		onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;

			var $wizard = navigation.closest('.wizard-card');

			// If it's the last tab then hide the last button and show the finish instead
			if($current >= $total) {
				$($wizard).find('.btn-next').hide();
				$($wizard).find('.btn-finish').show();
			} else {
				$($wizard).find('.btn-next').show();
				$($wizard).find('.btn-finish').hide();
			}

			//update progress
			var move_distance = 100 / $total;
			move_distance = move_distance * (index) + move_distance / 2;

			$wizard.find($('.progress-bar')).css({width: move_distance + '%'});
			//e.relatedTarget // previous tab

			$wizard.find($('.wizard-card .nav-pills li.active a .icon-circle')).addClass('checked');

		}
	});


	// Prepare the preview for profile picture
	$("#wizard-picture").change(function(){
		readURL(this);
	});

	$('[data-toggle="wizard-radio"]').click(function(){
		wizard = $(this).closest('.wizard-card');
		wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
		$(this).addClass('active');
		$(wizard).find('[type="radio"]').removeAttr('checked');
		$(this).find('[type="radio"]').attr('checked','true');
	});

	$('[data-toggle="wizard-checkbox"]').click(function(){
		if( $(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).find('[type="checkbox"]').removeAttr('checked');
		} else {
			$(this).addClass('active');
			$(this).find('[type="checkbox"]').attr('checked','true');
		}
	});

	$('.set-full-height').css('height', 'auto');
	
	
	/*^******************************************
	* Affichage d'un récapitulatif des infos saisies
	* récupere .val() si input 
	* et .text() si select et renseigné
	*/
	function getRecap() {

		$.each($(".recap"), function() {

			var idRecap = $('#'+$(this).attr("id")); //id recap - ex iban_e_recap
			var IdChampForm = $('#'+idRecap.attr('id').replace('_recap','')); //id champs  - ex iban_e
			
			if($(IdChampForm).is('select') && $(IdChampForm).val() != ''){

				idRecap.html($(IdChampForm).find(":selected").text());
				
			}else if($(IdChampForm).is('input') || $(IdChampForm).is('textarea')){

				idRecap.html(IdChampForm.val());
			}

			if ($("input[name='radio_hors_mayotte_v']:checked").val() == '1')
				$('#radio_hors_mayotte_v_recap').text('Oui');
			else if ($("input[name='radio_hors_mayotte_v']:checked").val() == '0')
				$('#radio_hors_mayotte_v_recap').text('Non');

			if ($("input[name='radio_bourse_v']:checked").val() == '1')
				$('#radio_bourse_v_recap').text('Oui');
			else if ($("input[name='radio_bourse_v']:checked").val() == '0')
				$('#radio_bourse_v_recap').text('Non');
		});
	}

	
});



	//Function to show image before upload
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
			}
			reader.readAsDataURL(input.files[0]);
		}
	}


	function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			clearTimeout(timeout);
			timeout = setTimeout(function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			}, wait);
			if (immediate && !timeout) func.apply(context, args);
		};
	}


