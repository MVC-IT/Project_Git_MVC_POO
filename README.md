# Collaborative project

> Learning Git and Github with a collaborative project oriented on a design model such as MVC. (Model, View, Controller)

## Lien projet

![Lien du trello](https://github.com/users/alain-guillon-it/projects/1)

## ● Contraintes Impértives

- Utilisation de **PHP 8.0** minimum.
- Utilisation de **Composer** obligatoire.
  - Installation du projet avec : `composer install`
- Installation de la dépendance VarDumper avec composer.
- J'impose impérativement des **commentaires** mêmes dans la partie **HTML** et **CSS**.
- Obligation de se créer **3 branches** spécifique
  - **git branch create**
  - **git branch update**
  - **git branch fix**
  - /!\ Pensez à bien git pull régulièrement vos branches quand vous switcherez entres-elles.
- Chaque **dossier** ou **fichier** doit **obligatoirement commencer par une majuscule**.
- Lors des futures commits, il faudra impérativement suivre une méthodologie bien précise :
  - **Un numéro de version** en reprenant la version antérieur
  - **Un mot clé spécifique à la tâche réalisé**...
  - **Un message claire sur ce qui a été apporté**

### Exemple Attendu pour les commits

```sh
git commit -m "v0.1.0 - Feature:create" -m "Message concernant la description de la nouvelle fonctionnalitée."
git commit -m "v0.1.0 - Feature:update" -m "Message concernant la description de la mise à jour de la fonctionnalitée."
git commit -m "v0.1.0 - Feature:fix" -m "Message concernant la description de la correction d'un bug dans la fonctionnalitée."
```

- **Un fichier contenu dans un dossier spécifique devra comporter le nom de ce même dossier en CamelCase**.

### Exemple Attendu pour les noms des fichiers et dossiers dans le répertoire **App**

```sh
# Dossier aux pluriels et les fichier au singulier.
📂 App
    |____📂 Controllers
    |       |____📝 HomeController.php
    |       |____📝 MediaController.php
    |       |____📝 FilmController.php
    |       |____📝 SerieController.php
    |       |____📝 PageController.php
    |       |____📝 ErrorController.php
    |       |____📝 ActorController.php
    |       |____📝 DirectorController.php
    |____📂 Models
    |       |____📝 HomeModel.php
    |       |____📝 MediaModel.php
    |       |____📝 FilmModel.php
    |       |____📝 SerieModel.php
    |       |____📝 ActorModel.php
    |       |____📝 DirectorModel.php
    |____📂 Interfaces
    |       |____📝 MediaInterface.php
    |       |____📝 PageInterface.php
    |____📂 Traits
    |       |____📝 MediaTrait.php
```

### Important

> **Un commit et un push sera obligatoire à chaque création, modification ou fix même si c'est pour un simple ajout d'une simple feature.**
> Une fois que tout vous semble OK, alors vous devrez **merger** vos changements sur **votre branche principale**.
> A cet instant il faudra me faire une **pull request afin que je valide tel ou tel tâche**.
> Lors de la validation d'une tâche on regardera ensemble pour l'ajout de label spécifique à la tache envoyé.

#### Aide Complémentaire

##### ‣ Connaître la dernière version d'une feature utilisée

```sh
git log
```

_Pour sortir de la liste des logs c'est **Command + C + Z**._

##### Se déplacer dans une branche et la créer si elle n'existe pas

```sh
git checkout -B nom_de_la_branche_souhaité

# où

git branch nom_de_la_branche_souhaité
git checkout nom_de_la_branche_souhaité
```

##### Ajouter un ou plusieurs fichiers

```sh
git add .
```

##### Récupérer des modification et push

```sh
# Récupération lors d'un update de la team
git pull

# Push un ajout
git push
```

## ● Organisation

| Contributor |     |          Role(s)          |
| :---------: | :-: | :-----------------------: |
|  **Alain**  |  ▶  | Scrum Master & Git Master |
|  **Tarek**  |  ▶  |       Product Owner       |
|  **Anas**   |  ▶  |       Product Owner       |
|  **Maher**  |  ▶  |       Product Owner       |

## Distribution of tasks

Voir le projet sur le repositorie principal
