$(function () {
	
	var route_rubrique  = $('#route_rubrique');
	var route_affrubrique  = $('#route_affRubrique');
	var route_actualite  = $('#route_actualite');
	var route_affactualite  = $('#route_affActualite');
	var token = $('meta[name="csrf-token"]').attr('content');
	
	
	var route_menu  = $('#route_menu');	
	
	 $.get(
    	route_menu.val(),
    	false,
        afficheMenu

	 );
	 
	 function afficheMenu(dataMenu){
		 
	    	console.log(dataMenu);
	    	
	    	$.each( dataMenu, function( key, value ) {
	    		 //console.log( value[0].rubrique_id);
	    		 $(".rubrique").append('<a class="dropdown-item dropdown-footer rubrique-font rubappend" id="'+value[0].rubrique_id+'"><i class="fas fa-book"></i> '+key+' </i></a>');
	    		 $(".rubrique").append('<div class="dropdown-divider"></div>');
	    		 
	    		 $.each( this, function( key2, value2 ) {
	    			//console.log( this.libelle+' '+this.rubrique_id);
	    			$("#"+this.rubrique_id).after('<a class="dropdown-item dropdown-footer actualite-font actualite" data-id="'+this.actualite_id+'" ><i class="fas fa-arrow-right"></i> '+this.titre+'  </a>')
		    		  
	    		}); 
	    		 
    		});
	    	
// afficher les actualité d'une rubrique
	    	$('.rubappend').on('click', function () { 
	    		$('.pagePrincipal').html('');	    		
	    	    $.get(
	    	    	route_rubrique.val(),
	    	    	 {rubrique_id :$(this).attr('id')},
	    	    	 affichelesrubrique
	    		);
	    	    
	    	 });
	    	

	    	
// afficher l'actualité   	
	    	$('.actualite').on('click', function () { 
	    		$('.pagePrincipal').html('');
	    	    $.get(
	    		    	route_actualite.val(),
	    		        {actualite_id : $(this).attr('data-id')},
	    		        afficheactualite
	    			);
    
	    	 });
	    	
	    	$(document).on('click', '.lireplus', function () { 
	    		$('.pagePrincipal').html('');
	    	    $.get(
	    		    	route_actualite.val(),
	    		        {actualite_id : $(this).attr('data-id')},
	    		        afficheactualite
	    			);
	    		
	    	 });
	    	
	    	  
	        $(document).ready(function(){
		        	$(".rubrique-font").hover(function(){
		        		$(this).css("background-color", "#f0f0f0");
		        		$(this).css("color", "#000000");
		        	  }, function(){
		        	  $(this).css("background-color", "transparent");
		        	  $(this).css("color", "#000000");
		          
		          	});
        	});
	        
	        $(document).ready(function(){
		        	$(".actualite-font").hover(function(){
		        		$(this).css("background-color", "#f0f0f0");
		        		$(this).css("color", "#000000");
		        	  }, function(){
		        	  $(this).css("background-color", "transparent");
		        	  $(this).css("color", "#000000");
		          
		          	});
        	});
	    	
	    	
		}
		
	

    function affichelesrubrique(dataRubrique){
    	$('.pagePrincipal').load(route_affrubrique.val(),{ actualites : dataRubrique, _token : token });
	}
    
    function afficheactualite(dataActualite){
    	 $('.pagePrincipal').load(route_affactualite.val(),{ actualite : dataActualite, _token : token });
	}
    
    var input_select2           = $('.input-select2');
    var value_select2           = $('.init-select2');
    var route_select2           = $('#route_select2'); 


    value_select2.each( function () {
        var target_select2 = $(this).attr('data-target-select2');
        var target_select2_libelle = $(this).attr('data-target-select2-libelle');
        $(target_select2).append( new Option(target_select2_libelle, $(this).val(), true, true)); 
    });

    //
    input_select2.each( function () {

        var tableCible  = $(this).attr('data-select-table'); 
        var placeholder = $(this).attr('data-placeholder');
        var route_url   = route_select2.val().replace(new RegExp('##table##', 'gm'), tableCible); 
		
        $(this).select2({
            placeholder: placeholder,
            language: 'fr',
            ajax: {
                url: route_url,
                dataType: 'json',
                data: function (params) {
                    return {
                        term: $.trim(params.term),
                        page: params.page || 1
                    };
                },
                cache: true
            }
        });
        
        
		
    });
	
	/* ****************************************************** */
	// affichage form autre représentant
	if($('#autresparent').val() == 'oui')
		$('.autreparent').css('display','block');
	else
		$('.autreparent').css('display','none');
	
	$('#autresparent').on('change', function() {
		if ($(this).val() == 'oui' ) {
			 $('.autreparent').css('display','block');
		} else if ($(this).val() == 'non'){
			
			 $('.autreparent').css('display','none');
		}
	});
	
	/* ****************************************************** */
    // Affichage du nom du pays en fonction du CP/Ville saisi
	var suffix_idInputCP = ['e','co','r']; //ex:  codepostal_ville_e | codepostal_ville_co |codepostal_ville_r
	$.each(suffix_idInputCP, function( key, value ) {
		
		$('#codepostal_ville_'+value).on('change', function () {
			var ville_id = $(this).val();
			var route_pays = $('#route_pays').val().replace(new RegExp('##ville_id##', 'gm'), ville_id); 
			$.ajax({
				type:'GET',
				url:route_pays,
				success: function(data) {
				   $('#pays_'+value).val(data.libellePays.libelle);
				},
			});
						
		});
	});
	/* ********************************************
	*Academie en fonction de l'établissement choisi
	*
	*/
	var suffix_idInputEtablissement = ['o','v1','v2','v3']; //ex:  etablissement_0 | etablissement_v |, etablissement__v2, etablissement__V2
	$.each(suffix_idInputEtablissement, function( key, value ) {
		
		$('#academie_'+value).on('change', function () {
			var academie_id = $(this).val();
			var route_etablissement = $('#route_etablissement').val().replace(new RegExp('##academie_id##', 'gm'), academie_id); 
			$('#etablissement_'+value).children('option:not(:first)').remove(); //reinitialise la liste
			$.ajax({
				type:'GET',
				dataType: 'json',
				url:route_etablissement,
				success: function(data) {
					var i = 0;
					for (i in data.etablissements) {
						$('#etablissement_'+value).append('<option class="etablissement" value='+data.etablissements[i].id+'>'+data.etablissements[i].libelle+'</option>');
					}
					
				},
			});
			
		});
	
		
	});

	
	/* ******************************* 
	* Submit form inscription étudiant
	* validation du formulaire
	*/
	$('#form-valid-msg').hide();
	$('#valider').on('click', function () {
		
		var formDatas = $('form').serialize();
		var route_create = $('form').attr("action");	
		
		$.ajax({
			type:'POST',
			data:formDatas,
			url:route_create,
			success: function(response) {
				if(response.code == 'ok'){
					$('#form-valid-msg').show();
					$('#valid-msg').html('Votre prédemande est enregistrée. Connectez-vous sur votre espace afin de compléter votre dossier');
					$('#valider').prop('disabled', true);
				}
				else{
					$('#form-valid-msg').removeClass('alert-success').addClass('alert-danger').show();
					$('#valid-msg').html('Erreur validation form : '+response.champs_erreur);
				}
				
			},
		});	
		
	});
	
});