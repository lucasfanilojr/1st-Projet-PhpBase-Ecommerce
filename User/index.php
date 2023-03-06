<?php require 'layout/header.php'; require '../Controller/login.php'; ?>

<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="">
				<label for="chk" aria-hidden="true">se connecter</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="motdepasse" placeholder="Mot de passe" required="">
					<button type="submit" name="connecter" >Se connecter</button>
					<button><a href="../index.php">Retour</a></button>
					<div class="oublie"><a href="oublieMotdepasse.php" style="text-align: center;">Mot de passe oublie?</a></div>
				</form>
			</div>

			<div class="login" id="login">
				<form method="post" action="">
				<label for="chk" aria-hidden="true">inscrire</label>
					<input type="text" name="user" placeholder="Nom d'utilisateur" required="">
					<input type="text" name="email" placeholder="Votre e-mail" required="">
					<input type="password" name="motdepasse" placeholder="Mot de passe" required="">
					<input type="password" name="retaper" placeholder="Retaper le mot de passe" required="">
					<button type="submit" name="inscrire" >S'inscrire</button>
				</form>
			</div>
	</div>

<?php if($erreur): ?>
	<h3 style="color: white;border: 1px solid white;position: relative;left: 15px;"><?=$erreur  ?></h3>
<?php endif; ?>

</body>
<?php require 'layout/footer.php'; ?>