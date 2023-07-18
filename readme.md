# Garage V. Parrot


## Environnement de développement

### Pré-requis

#### Front
HTML 5
CSS 3
Bootstrap 5
JavaScript


#### Back
PHP 8.2.4
Composer
Symfony CLI 5.5.6
Docker
Docker-compose
nodejs et npm
MySQL

Vous pouvez vérifier les pré-requis Back avec la commander suivante (de la CLI Symfony) : Symfony check:requirements


#### Serveur
MySQL
Xampp

### Lancer l'environnement de développement
1.Importer le depôt GitHub dans le fichier htdocs du logiciel Xampp.

2.Dans la l'invite de commande de l'éditeur de code taper : 
    1- compser install
    2- npm install
    3- docker-composer up -d
    4- Symfony serve -d (pour afficher le site)

### Ajouter des données de tests
symfony console doctrine:fixatures:load

### Fabriqué avec 
VSCode




## Lancer des tests
php bin/php --testdox




## Se connecter au compte admin 
Entrer dans la barre de recherche du navigateur : http://127.0.0.1:8000/login