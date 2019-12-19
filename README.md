# **PROJET OFILDELO**
![](readmeimg/logo.png "Au fil de l'Ô")

Affichage du patrimoine touristique de Seine et Marne.

### **Auteurs**

Yahia Lamri - Stanislas Raczynski

### **Etat du projet**

Work in Progress

### **Description**

Le projet Au fil de l'eau à pour but de présenter le patrimoine touristique de Seine et Marne, via un système de recherche multi-critériel, de sauvegarde dans les favoris de l'utilisateur, le tout à travers une interface client.

### **Utilisation**

Le client n'a qu'a se connecter via l'interface designé à cet effet en json. Le patrimoine est affiché dans un tableau descriptif comprenant son nom sa ville son département et sa description.
![](readmeimg/affichage.png "Affichage du patrimoine")

Le client peut ensuite afficher une liste réduite comprenant les critères qu'il a choisit dans la liste suivante. Le client peut en plus ajouter à ses critères le département dans lequel il souhaite rechercher un endroit spécifique.
![](readmeimg/filtres.png "Filtres Multi-critères")

### **LICENCE**

Projet réalisé sous la Licence MIT

### **Mise en place**

Pour faire fonctionner l'application, le serveur de l'api doit être lancé (via la commande php bin/console server:run). Une fois cette commande effectuée, le serveur web de l'interface client doit être lancé. Une fois fait le client peut accéder à l'interface via son navigateur. 
