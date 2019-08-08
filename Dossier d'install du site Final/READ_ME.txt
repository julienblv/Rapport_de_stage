Bonjour ,

nous vous remercions d'avoir installé nôtre application.

Sans plus attendre, voici le processus d'installation:

pour pouvoir avoir nôtre site sur vôtre machine il vous faudra au préalable avoir installé un server Wamp
puis y déposer vôtre fichier 'cpam_pca' dans le localhost(dans vôtre dossier 'www' de wamp).

vérifiez ensuite les paramètres suivants de vôtre wamp: 

Apache 2.4.39 Port 80- PHP 7.2.18
MySQL 5.7.26 Port 3306
MariaDB 10.3.14 Port 3307
PHP 5.6.40 for CLI (Command-Line Interface)


une fois ceci fait n'oubliez pas d'insérer la base de données annuaire dans phpmyadmin(fourni dans wamp)


il vous faudra créer une base de données que vous appellerez 'annuaire' et vous y insèrerai vôtre fichier annuaire.sql
puis vôtre fichier csv (il faudra sélectionner une table pour le csv) en allant sur l'onglet 'Importer' de phpmyadmin une fois la bd crée.

Une fois toutes ces opérations effectuées vous pourrez lançer vôtre application et gérer les contacts.

