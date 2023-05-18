# Quai Antique

Le Quai Antique est un restaurant de Chambéry qui propose la cuisine traditionnelle de Savoie du chef Arnaud Michant. 
Ce site a usage professionnel est voué à évoluer dans l'avenir afin de proposer plus de fonctionnalités et d'efficacité pour ses utilisateurs. Une partie histoire du chef et du restaurant arrivera notamment ainsi que la possibilité pour les clients de laisser leurs avis sur la cuisine du chef. 

## Environnement de développement 

### Pré-requis
-   PHP 8.0.25
-   Composer 2.5.4
-   Symfony CLI
-   nodejs et npm
-   Easyadmin
-   Alwaysdata 
-   DBeaver
-   VPS

### Lancer l'environnement de développement 

``bash
symfony serve -d
``

### Arreter l'environnement de développement 

``bash
symfony serve:stop
`` 

### Lancer des tests

``bash
php bin/phpunit
``
## Mettre à jour le style 
``bash
npm run build
``


## Lien du dépôt associé au projet
https://github.com/HM-codeuse/Quai_Antique.git


## Migration du projet vers BDD Alwaysdata
``bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
``


## Instructions pour la création d'un nouvell utilisateur (client ou admin)

### 1. Créer un nouveau mdp crypté
``bash
symfony console security:hash-password
``
copier le mot de passe haché

### 2. Insérer un nouvel administrateur dans la bdd en sql
``DBeaver
INSERT INTO users (firstname, username, email, password, roles) VALUES ('Monprénom', 'Monnom', 'mon@email.com', 'monmotdepassecrypté','["ROLE_ADMIN"]')
``
Pour créer un utilisateur client passer par la page d'inscription directemen. 