# akniou_topalovic_projet_web

Pour la répartition du travail nous sommes à 50% chacun.

Sur notre site on peut :

Créer un compte
Se connecter
Se déconnecté
Rédiger une news seulement si on est connecté
la page d'accueil affiche seulement les 4 news les plus récentes, toutes les news se trouvent dans la section news
Un compte admin qui peut modifier et supprimer toutes les news : 
    admin@admin.com
     ?Admin123?
     
un regex qui vérifie le mot de passe, 8 caractère minimum, 1 majuscule, 1 numéro, 1 minuscule, 1 caractère spécial  et un message d'erreur si ce n'est pas bon
un regex qui vérifie l'adresse mail et un message d'erreur si ce n'est pas bon
on vérifie si l'adresse mail n'est pas déjà présente dans la BdD, il n'y a pas de message affiché il revient sur la page création compte
voir les news qu'on a écrit, elles s'affichent dans rédiger une news.
une page contact qui envoie un mail à un des admins. /!\ Nécessite la configuration du php.init /!\ 
Dans news il y a la possibilité de rechercher via le titre, si la chaine rentré dans la barre de recherche se trouve dans un des titres
Recherche par thème
Par date de début donc >= a la date début
Par date de fin donc <= a la date fin
Par durée donc >= à date début et <= à date fin
n'affiche rien si les news ne sont pas dans l'intervalle des Dates finis



Sur notre site on ne peut pas (on aurait voulu le faire mais manque de temps):

Modifier ou supprimer la news qu'on a écrit.
Recevoir un mail de confirmation pour confirmer son compte.
L'option mot de passe oublié


