<!-- 
Author  : Emmanuel Distingué NGBAME KOYAPOLO
Contact : ngbamedistingue@yahoo.com
Date    : 25 april 2021 
Statut  : Not yet finished...
-->
<?php
    if (isset($_POST['formQuiz'])) {

        extract($_POST);
        include 'connexion.php';
        global $db;

        $q = $db->prepare("INSERT INTO question(noms,mail,tel,sujet,message) VALUES(:noms,:mail,:tel,:sujet,:message)");
        $q->execute([
            'noms' => $noms,
            'mail' => $email,
            'tel' => $phone,
            'sujet' => $sujet,
            'message' => $message
        ]);
        echo "Nouveau message ";
    }
?>