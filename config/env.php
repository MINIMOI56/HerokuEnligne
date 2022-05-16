<?php 

// Constante du mode de l'application
// dev : variables utilisées en local
// prod : pour le déploiement de l'api en production
define("MODE", "prod");

switch (MODE) {
    case "dev":
        // Configuration BD en local
        $_ENV['host'] = 'localhost';
        $_ENV['username'] = 'root';
        $_ENV['database'] = 'libapi';
        $_ENV['password'] = 'mysql';
        break;

    case "prod":
        // Configuration BD pour Heroku
        $_ENV['host'] = 'us-cdbr-east-05.cleardb.net';
        $_ENV['username'] = 'b7f9bc5cc0bc00';
        $_ENV['database'] = 'heroku_b2d64d32ca2b7de';
        $_ENV['password'] = 'aca5ccfe';
        break;
};
