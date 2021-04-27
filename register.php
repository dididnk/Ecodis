<!-- 
Author  : Emmanuel Distingué NGBAME KOYAPOLO
Contact : ngbamedistingue@yahoo.com
Date    : 25 april 2021 
Statut  : Not yet finished...
-->
<?php
if (isset($_POST['formsend'])) {

    extract($_POST);
    if (!empty($prenom) && !empty($nom) && !empty($sexe) && !empty($tel) && !empty($_mail) && !empty($password) && !empty($password2)) {
        if ($password == $password2) {

            include 'connexion.php';
            global $db; 

            // Hasher le mot de passe
            $options = [
                'cost' => 12,
            ];
            $haspass = password_hash($password, PASSWORD_BCRYPT, $options);

            $c = $db->prepare("SELECT mail FROM users WHERE mail= :mail");
            $c->execute(['mail' => $_mail]);
            $resultat = $c->rowCount();

            if ($resultat == 0) {
                $q = $db->prepare("INSERT INTO users(prenom,nom,sexe,tel,mail,password) VALUES(:prenom,:nom,:sexe,:tel,:mail,:password)");
                $q->execute([
                    'prenom' => $prenom,
                    'nom' => $message,
                    'sexe' => $sexe,
                    'tel' => $tel,
                    'mail' => $_mail,
                    'password' => $haspass
                ]);
                echo "Compte créer avec succès. ";
            } 
            else
                echo "Votre compte existe déjà, connectez-vous à tout à gauche !.";  
        } 
        else
            echo "Erreur au niveau de votre mot de passe !.";
    }
}