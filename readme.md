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

##Users stories
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
