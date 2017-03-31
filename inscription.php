<?php 
    session_start();
    include('entete.php'); ?>


    <div class="formulaire">

    <h2>Inscrivez-vous !</h2>
    	<form action="login.php" method="post">
    		<fieldset> 
    		<legend><b>Rien de plus.</b></legend>
    		<table width="500" border="0" align="center">
    			<tr> <td> Pseudo *: </td>
    			<td> <input type="text" name="pseudo" size="32" maxlength="20"></td></tr>

    			<tr> <td>Mot de passe *: </td>
    			<td> <input type="password" name="mdp" size="32" maxlength="12"></td></tr>

    			<tr> <td>Vérification mot de passe *:</td>
    			<td> <input type="password" name="mdp_confirm" size="32" maxlength="12"></td></tr>

                <tr> <td>Courrier électronique *:</td>
                <td> <input type="text" name="mail" size="32" maxlength="32"></td></tr>

                <tr> <td>Confirmation du courrier électronique *:</td>
                <td> <input type="text" name="mail_confirm" size="32" maxlength="32"></td></tr>

    			<tr> <td>Nom *:</td>
    			<td> <input type="text" name="nom" size="32" maxlength="32"></td></tr>

    			<tr> <td>Prénom *:</td>
    			<td> <input type="text" name="prenom" size="32" maxlength="32"></td></tr>

    			<tr> <td>Sexe :</td>
    			<td> <input type="radio" name="sexe" value="M"> M <input type="radio" name="sexe" value ="F"> F </td></tr>

    			<tr> <td>Recevoir des offres promotionnelles: </td>
    			<td> <input type="checkbox" name="pub" value="oui" checked></td></tr>

    			<tr><td colspan="2"> <input type="submit" name="envoi" value ="S'inscrire" > </td> </tr>
    		</table>

    </div>

</body>
</html>
?>
