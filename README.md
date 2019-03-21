Afin de demarrer la correction de l'evaluation lancer le script start.sh

Celui ci mettra commencera par mettre ce git sur la V1 et clonera le git de test sur la V1 aussi

Il lancera l'initialisation des containers docker

Les ports utilisés sont les suivants:
    - 8080 pour nginx
    - 8081 pour jenkins
    - 3306 pour mariadb

Pour verifier le fonctionnement du site il suffit de se rendre sur http://localhost:8080

Pour lancer les tests unitaires Jenkins, il faut se rendre sur http://localhost:8081

Sur Jenkins 3 jobs permettent de recuperer le job groovy getV1, getV2, getV3
A l'execution ils permettent de créer job-v1, job-v2, job-v3 qui s'execute toutes les heures

Chaque job va cloner ce repo git ainsi que le git samplephpwebsite sur la bonne branche
et executer un test phpUnit qui verifiera le bon fonctionnement des fonctions presentent dans functions.php

Une fois le job executé il suffit de verifier si tous c'est bien deroulé
et passer a la version de git suivante en passant a l'etape d'après