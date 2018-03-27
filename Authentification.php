<?php
    require_once('header.php');
?>

<form action="login.php" method="post" class="" style="text-align: right">
			<div>
				<label for="login">Votre login :</label> 
				<input type="text" name="login" class="button" required><br/>
			</div>
			<div>
				<label for="password">Votre mot de passe :</label> 
				<input type="password" name="pwd" class="button" required><br/>
			</div>
				<input type="submit" value="Connexion" class="button"><br>
				
			</form>

<?php 
    require_once('footer.php');
?>