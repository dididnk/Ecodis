<!-- 
Author  : Emmanuel Distingué NGBAME KOYAPOLO
Contact : ngbamedistingue@yahoo.com
Date    : 25 april 2021 
Statut  : Not yet finished...
-->

<?php
    define('HOST', 'localhost');
    define('DB_NAME', 'bdd_ecodis');
    define('USER', 'root');
    define('PASS','');
    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e;
    }
?>