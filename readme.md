# Quai Antique

Le Quai Antique est un restaurant de Chambéry qui propose la cuisine traditionnelle de Savoie du chef Arnaud Michant. 

## Environnement de développement 

### Pré-requis
-   PHP 8.0.25
-   Composer 2.5.4
-   Symfony CLI
-   nodejs et npm
-   Easyadmin
-   Alwaysdata 
-   DBeaver

### Lancer l'environnement de développement 

``bash
symfony serve -d
``

### Arreter l'environnement de développement 

``bash
symfony serve:stop
`` 

## Lancer des tests

``bash
php bin/phpunit
``

## Lien du dépôt associé au projet
https://github.com/HM-codeuse/Quai_Antique.git


## Migration du projet vers BDD
``bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
``

## Metre à jour le style 
``bash
npm run build
``


## Pour créer un nouvel utilisateur
### 1. Créer un nouveau mdp crypté
``bash
symfony console security:hash-password
``
copier le mot de passe haché

### 2. Insérer un nouvel utilisateur en sql
``DBeaver
INSERT INTO users (firstname, lastname, email, password, username, roles) VALUES ('Monprénom', 'Monnom', 'mon@email.com', 'monmotdepassecrypté','monusername','MON_ROLE')
``
