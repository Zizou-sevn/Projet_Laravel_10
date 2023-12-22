# Projet de restaurant O Cnamo

Ce projet est un site web test pour la formation DEVWEB du CNAM

## Prérequit 

-Apache 2.4.54
-MariaDB 10.10.2
-PHP 8.0.26
-Composer 2.6.5 
-NodeJS et npm 

## Instalation

### Version dev 
Il faut d'abord cloner l'application en local : 
Voir le git clone de daishi dans dossier 'Clone' (~/OneDrive/Projet cnam dev 2023-2024/laravel-10/Clone)
...

Ensuite il faut configuerer les accées a la BDD dans le fichier '.env' : 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_10
DB_USERNAME=laravel_10
DB_PASSWORD=321

...
Pour créer la BDD, vous pouvez utiliser un script bash : 
./mkdb.sh
...

## Utulisation

Dans le terminal : 

```
PHP ARTISAN SERVE 
```

Aller sur la page : 

## Rquetes SQL utiles
-- Liste des categories et de leurs plats 
---
SELECT *
FROM categories
INNER JOIN plats ON categories.id = plats.categories_Id 
ORDER BY categories_Id, plats.nom;
---
SELECT * 
from plats
ORDER BY plats.nom;
---
SELECT * 
from plats
INNER JOIN etiquettes_plats ON etiquettes_plats.plats_id = plats.id
INNER JOIN etiquettes on etiquettes_plats.etiquettes_Id = etiquettes.id
ORDER BY plats.nom, etiquettes.nom;
---

### Images d'ambiance 

La taille recommandée est : 

-Largeur : 1024px
-Hauteur : 728px

Ilvaut mieux utiliser des fichiers JPEG car ils sont plus léger. 

## Mention légales 

### Licences projet

? @TODO

### Droits D'auteur 

Toutes les photos du site ont été réalisée par...