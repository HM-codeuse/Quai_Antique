# Quai Antique

Le site Quai Antique est le site d'un restaurant de Chambéry qui propose la cuisine traditionnelle de Savoie du chef Arnaud Michant. 
Ce site à usage professionnel est voué à évoluer dans l'avenir afin de proposer plus de fonctionnalités et d'efficacité pour ses utilisateurs. Une partie histoire du chef et du restaurant arrivera notamment ainsi que la possibilité pour les clients de laisser leurs avis sur la cuisine du chef. 

## Environnement de développement 

### Pré-requis
Pour exécuter cette application sur votre environnement local, il faudra disposer des éléments suivants:
-   PHP 8.0.25 ou supérieur
-   Composer 2.5.4 ou supérieur
-   Symfony CLI
-   Un espace d'hébergement pour la base de données (comme Alwaysdata)
-   Un système de gestion de bases de données (par exemple DBeaver)

Il faudra donc installer tous ces élèments avant de commencer le projet.

### Cloner le projet

- Créer une répertoire pour y télécharger le projet. 
- Ouvrir un terminal et se placer dans ce projet.
- Cloner le projet en tapant la commande suivante dans votre terminal

```bash 
git clone https://github.com/HM-codeuse/Quai_Antique.git
```
- Se placer dans ce dépot cloné en tapant: 
```bash
cd Quai_Antique 
```

### Télécharger les dépendances

Pousuivez en téléchargeant les dépendances à l'aide des commandes suivantes:

```bash
npm install
composer install
```

### Configurer le fichier d'environnement local

Modifiez le fichier .env.local ou le fichier .env en définissant la variable DATABASE_URL avec les informations de connexion de votre base de données(comme le SGBD, nom de l'application, hôte et mdp)

### Créer la base de données et y importer la structure 

- Créez la base de données avec la commande suivante: 
```bash
php bin/console doctrine:database:create
```
- Réalisez une migration et exécutez cette migration pour importer la structure de la base de données à l'aide des commandes suivantes: 
```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

### Importer les données de la base de données du projet 

- Ouvrez le fichier script.sql et copier la partie d'insertion des données pour disposer de données factices dans votre base de données

## Lancer le serveur local et l'arrêter
- Pour lancer le serveur, taper 
```bash
symfony serve -d
```
- Pour l'arrêter, taper: 
```bash
symfony serve:stop
```

## Créer un nouvel utilisateur (client ou admin)

### 1. Créer un nouveau mdp crypté
- Taper la commande suivante:
``bash
symfony console security:hash-password
``
- Copier le mot de passe hachécrypté

### 2. Insérer un nouvel administrateur dans la bdd en sql

- A l'aide de votre système de gestion de base de données insérer un nouvel administrateur à l'aide du script SQL suivant:

```DBeaver
INSERT INTO users (firstname, username, email, password, roles) VALUES ('Monprénom', 'Monnom', 'mon@email.com', 'monmotdepassecrypté','["ROLE_ADMIN"]')
```
Pour créer un utilisateur client, répétez la même démarche ou passez par la page d'inscription. 

Testez, améliorez le projet et amusez-vous!