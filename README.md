# QT100balles-Full-Symfony

![alt text](https://i.ibb.co/kQBSShj/qt100balles-accueil.png)

## Technologies Utilisées

### Front
* Symfony (vues twig)
* Bootstrap 
* CSS personnalisé 
* Javascript  
 <br>
Les visuels sont envoyés en vues twig. Twig est un moteur de template utilisé par défaut sur le 
framework symfony.
Le design est conçu avec la librairie Bootstrap pour la structure de base et le responsive. Auquel fut 
ajouté du CSS personnalisé, ou encore la librairie animate css pour le logo.
Javascript a été utilisé pour les besoins de certaines fonctionnalités et les parties dynamiques du site.
<br>

 ### Back
* Symfony 
* Interface avec la base de données : ORM Doctrine 
* Base de données : MySql 
* Gestion de la base de données : PhpMyAdmin 
<br>
Le back est développé via le framework Symfony en version 5.4. L’ORM Doctrine se chargeant de 
la manipulation de la base de données.
<br><br>

![alt text](https://i.ibb.co/wJCSnys/qt100balles-fiche.png)

## Fonctionnalités
* Design Responsive avec bootstrap
* CSS personnalisé / librairie AnimateCSS
* Mise en place des items (bonbons, jouets, objets) et medias (films, séries tv, dessins animés, émissions tv), listes et fiches détaillées
* Compte utilisateur / login-logout/ page profil / modifier et supprimer son compte
* Fonctionnalité d'ajout d'un contenu pour l'utilisateur connecté
* Fonctionnalité d'ajout en favoris d'une fiche détaillée
* Moteur de recherche
* Filtres par genre pour les médias, et par année pour tout le site
* Réécriture d'url sur les fiches aux détails
* Pagination 
* Formulaire avec contraintes de validation 
* Mise en place des commentaires 
* Backoffice pouvant gérer les utilisateurs, les roles, commentaires, crud items et medias.
* Sécurité : contraintes de validation sur les formulaires / ORM Doctrine pour requêtes classiques et setParameter pour les personnalisées / token CSRF / hachage du mot de passe / limitation à 3 tentatives de connexion en l'espace de 15 minutes / conditions de validation du mot de passe imposées à l'utilisateur pour avoir un mot de passe plus compliqué / rôles et permissions
* Tests fonctionnels
* page 403
* page 404

<br><br>
![alt text](https://i.ibb.co/Z1DS8Nt/qt100balles-liste.png)
