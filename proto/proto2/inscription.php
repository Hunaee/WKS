<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>
    <div id="img_background"><img src="img/tel_trotinette.png" alt="tel_trotinette"></div>

    <h2>M'inscire</h2>
<div id="hero_section">
    <div id="nom_prenom">
            <div class="bloc_label_input_nom_prenom">
                <label for="nom">Nom </label>
                <input type="placeholder" name="nom" placeholder="Entrez votre nom">
            </div>

            <div class="bloc_label_input_nom_prenom">
                <label for="prenom">Prénom </label>
                <input type="placeholder" name="prenom" placeholder="Entrez votre prénom">
            </div>
    </div>


        <div class="bloc_label_input_nom_prenom">
            <label for="mdp">Mot de passe </label>
            <input type="placeholder" name="mdp" placeholder="Entrez un mot de passe">
        </div>



        <div class="bloc_label_input_nom_prenom">
            <label for="mdp">Confirmer votre mot de passe </label>
            <input type="placeholder" name="confirmer_mdp" placeholder="Confirmer votre mot de passe">
        </div>

        <div id="check_box_bloc">
            <input type="checkbox" id="check_box_conditions" name="check_box_conditions">
            <label for="check_box_conditions">J'ai lu et j'accepte les conditions générales</label>
        </div>


        <button id="btn_confirm" onclick="window.location.href='index.php';" style="cursor: pointer;">></button>

        <div id="bloc_deja_compte">
            <p>Déjà un compte ? <a href="me_connecter.php">Me connecter</a></p>
        </div>
        
</div>



</body>
</html>