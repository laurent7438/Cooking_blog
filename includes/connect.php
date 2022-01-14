<?php
        // définir des constantes d'environnement
        define("DBHOST", "localhost");
        define("DBUSER", "root");
        define("DBPASS", "");
        define("DBNAME", "cooking_blog");

        //pour PDO on va avoir besoin d'un Data Source Name de connexion
        $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

        //on va se connecter à la base
        try{
            //on va instancier PDO
            $db = new PDO($dsn, DBUSER, DBPASS);

            //on va s'assurer d'envoyer les données en utf8
            $db->exec("SET NAMES utf8");

            //on peut définir le mode de "fetch" par défaut 
            // (il faudra donc par la suite préciser le mode si on ne souhaite pas utiliser celui-ci)
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die($e->getMessage());
        }
        //ici on est connectés à la base
