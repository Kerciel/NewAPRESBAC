
<!--div class="row">

	<div class="col-sm-8 col-sm-offset-2">
		<div class="form-group">
			<label>Login <small class="text-muted">* (Ce login va vous servir d'identifiant de connexion)</small></label>
			<input name="login" id="login" type="text" class="form-control" title="Le login est obligatoire !" placeholder="Login"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Login'" value="" required> 
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="form-group">
			<label>Email <small class="text-muted">*(Il doit être valide pour l'activation de votre compte)</small></label>
			<input name="email_e" id="email_e" type="email" class="form-control" title="L'email est obligatoire !" placeholder="E-mail"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="form-group">
			<label>Mot de passe <small class="text-muted">*</small></label>
			<input name="password" id="password" type="password" class="form-control" title="Le mot de passe est obligatoire !" placeholder="Mot de passe"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'" required>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="form-group">style="font-family: 'Sen',sans-serif;color: #030431;margin-top: 0px;font-style: normal;font-weight: 500;"
			<label>Confirmez la saisie de votre mot de passe <small class="text-muted">*</small></label>
			<input name="password_confirmation" id="password_confirmation" type="password" class="form-control" title="La confirmation du mot de passe est obligatoire !"  placeholder="Confirmation mot de passe"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirmation mot de passe'" required>
		</div>
	</div>

</div-->
<fieldset class="form-group col-sm-12">
	<legend>Mes identifiants</legend> 
	<div class="row">
		<div class="col-lg-12">
			<div class="input-group-icon mt-10">
				<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
				<input type="text" name="login" id="login" placeholder="Login"
					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Login'" required
					class="single-input">
			</div>
			<div class="input-group-icon mt-10">
				<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
				<input type="email" name="email_e" id="email_e" placeholder="E-mail"
					onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required
					class="single-input">
			</div>
			<div class="input-group-icon mt-10">
				<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
				<input type="password" name="password" id="password" placeholder="Mot de passe"
					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'" required
					class="single-input">
			</div>
			<div class="input-group-icon mt-10">
				<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
				<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmation mot de passe"
					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirmation mot de passe'" required
					class="single-input">
			</div>
		</div>
	</div>
</fieldset>