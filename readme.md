# Projet HBCK - site internet visible en mobile
## configuration requise
- bibliothèque libzip , pour se faire, installer php 7.3
- controller/SiteController.php : l. 48 : $monAdresse contient l'adresse relative interne du path ou est copié le fichier, avec un / à la fin
Donc, c'est dépend du système d'exploitation du serveur.
Pour information, pour le développement, nous sommes sous Linux ou Mac.