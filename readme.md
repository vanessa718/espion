<<<<<<< HEAD
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Création d'un site pour l'agence d'agent RAE
L'agence RAE (Rodez Agence d'agent) souhaiterait gérer plus facilement ses ressources et ses missions. Votre mission (vous devez l'accepter) et de créer une application qui permettrait :
* au master de gérer et d'affecter des missions ;
* aux agents de voir et mettre à jour leurs missions affectées.

**Il n'est pas nécessaire de travailler sur l'affichage graphique. L'objectif est la mise en place de la base de données et des composants d'accès aux données.**

**La base de données doit respecter les users stories.**

## Objectifs
* **Créer le modèle de la base de données (format libre).**  
    Complexité : *Normal*  
    Durée estimée : *0,25 jour*  
    Compétence : *2*
* **Concevoir la base de données en fonction du modèle (format libre).**  
    Complexité : *Normal*  
    Durée estimée : *0,25 jour*  
    Compétence : *3*
* **Mettre en place l'application avec le framework Laravel.** Celle-ci devra être connecté à la base de donnée.  
    Complexité : *Normal*  
    Durée estimée : *0,5 jour*  
    Compétence : *5*
* **Mettre en place un système de connexion et afficher la mission affectée (pour un agent) ou la liste des missions (pour un master).** Attention, la connexion doit être sécurisée !!!  
    Complexité : *Complexe*  
    Durée estimée : *1 jour*  
    Compétences : *4, 5 et 6*
* **Modifier les missions.**  
    Complexité : *Complexe*  
    Durée estimée : *0,5 jour*  
    Compétences : *4, 5 et 6*

## Users stories
* **En tant que master, je peux** me connecter à l'application avec mon nom de code et mon mot de passe.
* **En tant que master, je peux** ajouter une nouvelle mission. Elle doit au moins contenir un agent, une cible, une description, une localisation.
* **En tant que master, je peux** créer un nouvel agent.
* **En tant que master, je peux** créer une nouvelle cible.
* **En tant que master, je peux** déclarer si un agent est mort.
* **En tant que master, je peux** associer une ou plusieurs cible.s à une mission. Une cible peut être dans une ou plusieurs mission.s.
* **En tant que master, je peux** associer un agent à une mission. Un agent ne peut avoir qu'une seule mission.
* **En tant que master, je peux** associer une localisation à un mission. Les localisations possibles correspondent aux continents.
* **En tant que master, je peux** voir toutes les missions en cours.
* **En tant que master, je peux** voir tous les agents et leurs états.
* **En tant que master, je peux** voir et ajouter une nouvelle cible.
* **En tant que master, je peux** voir le nombre de missions réalisées par un agent
* **En tant qu'agent, je peux** me connecter à l'application avec mon nom de code et mon mot de passe.
* **En tant qu'agent, je peux** voir la mission qui m'est affectée.
* **En tant qu'agent, je peux** déclarer avoir réalisé ma mission.
* **En tant qu'agent, je peux** voir toutes les missions que j'ai réalisé.
* **En tant qu'application, je doit** classifier une mission si l'agent est découvert.
* **En tant qu'application, je doit** afficher que les noms de code des agents dans les interfaces.
* **En tant qu'application, je doit** avorter la mission si l'agent est mort.

## Compétences
* Comp. 2 : Concevoir une base de donnée (niv 3)
* Comp. 3 : Mettre en place une base de donnée (niv 3)
* Comp. 4 : Développer une interface utilisateur (niv 3)
* Comp. 5 : Développer des composants d'accès aux données (niv 3)
* Comp. 6 : Développer une page web en lien avec une base de donnée (niv 3)
* Comp. 9 : Utiliser l'anglais dans son activité professionnelle en informatique (niv 2)
>>>>>>> 12229cb97df42c6914e3aed20cb148a30fc0f7d9
