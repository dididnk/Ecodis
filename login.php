<!-- 
Author  : Emmanuel Distingué NGBAME KOYAPOLO
Contact : ngbamedistingue@yahoo.com
Date    : 25 april 2021 
Statut  : Not yet finished...
-->
<?php
if (isset($_POST['formlog'])) {
    extract($_POST);

    $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
    $lpassword = isset($_POST['lpassword']) ? $_POST['lpassword'] : '';

    if (!empty($mail) && !empty($lpassword)) {
        include 'connexion.php';
        global $db;

        $c = $db->prepare("SELECT * FROM users WHERE mail= :mail");
        $c->execute(['mail' => $mail]);
        $result = $c->fetch();

        if ($result == true) {
            $hashpassword = $result['password'];
            if (password_verify($lpassword, $hashpassword)) {
                // utilisateur existe
                session_start();
                $_SESSION['mail'] = $mail;
                $_SESSION['lpassword'] = $lpassword;

                $_SESSION['logged'] = true;

                header('Location: MyHome.php');
            }
            else
                header('Location: index.php?error=2&password' .$password);
        }
        else
            header('Location: index.php?error=1');
    }
}