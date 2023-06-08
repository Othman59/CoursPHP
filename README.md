# CoursPHP

Cette application est développée en PHP et permet la gestion de personnages avec leurs attributs (classe, race, nom, stat d'attaque et stat de défense). Les utilisateurs peuvent se connecter, visualiser leurs personnages et afficher les détails de chaque personnage. De plus, les utilisateurs peuvent combattre les personnages d'autres utilisateurs.

- Configuration requise
- Serveur web compatible avec PHP (par exemple Apache)
- PHP version 7.0 ou supérieure
- Serveur MySQL
- Navigateur web pour accéder à l'application

Installation

- Clonez ce dépôt de code source sur votre serveur web.
- Importez la base de données fournie (database.sql) dans votre serveur MySQL.
- Modifiez les informations de connexion à la base de données dans les fichiers index.php et detail.php. Recherchez les lignes suivantes et remplacez les valeurs entre crochets ([votre_base_de_donnees], [nom_utilisateur], [mot_de_passe]) par les informations de votre configuration :
- $conn = new PDO('mysql:host=localhost;dbname=[votre_base_de_donnees]', '[nom_utilisateur]', '[mot_de_passe]');

Contributions

Les contributions à cette application sont les bienvenues ! Si vous souhaitez améliorer ou ajouter des fonctionnalités, veuillez suivre les étapes suivantes :
 
1 - Fork ce dépôt de code source.
2 - Créez une branche pour vos modifications : git checkout -b feature/nouvelle_fonctionnalite.
3 - Effectuez les modifications souhaitées et committez-les : git commit -m 'Ajouter une nouvelle fonctionnalité'.
4 - Poussez les modifications vers votre fork : git push origin feature/nouvelle_fonctionnalite.
5 - Ouvrez une Pull Request pour que vos modifications soient examinées.

Auteurs:

Douz Othman
