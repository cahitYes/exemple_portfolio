# exemple_portfolio
exemple_controler_frontal 

## Etape 1
Creer votre repository sur github en public.

Clonez celui ci sur notre machine.

Entrez dans le référenciel sur la branche par défaut: `main`

Creer un virtualhost ou mettez le dossier a un endroit accessible

## Etape 2 
Creer des branches par actions, et surtout faire regulierement des sauvegardes (commit)

    git checkout -b NomDeMaBranche
    git add.
    git commit -m"Mon message"
    ...
    git push origin NomDeMaBranche

Puis effectuer un pull request sur la `main`sur github, ensuite le valider et retourner sur la `main` en local et faire 

    git checkout main 
    git pull origin main

et puis creation d'une nouvelle branche et ainsi de suite...

## Etape 3
Creation du controleur frontal nommé `index.php`

## Etape 4
Creation d'un `.gitignore` pour rendre invisible `config.php` avant meme sa creation !

## Etape 5
Creation du veritable config.php, il ne sera mis github grace au .`gitignore`
On peut creer une copie de `config.php` de la quelle on retirerait les informations sencibles: `config.php.info`

## Etape 6

On importe le fichier `config.php` dans le CF (controleur frontal) `index.php`
    require_once "config.php";