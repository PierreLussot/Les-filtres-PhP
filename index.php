<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <table>
        <!-- <tr>
            <th>Nom du filtre</th>
            <th>Id du filtre</th>
        </tr> -->
        <?php
        /*********************************** 1 filter_list()  *************************************************** */

        /**
         *Retourne une liste de tous les filtres supportés
         *https://www.php.net/manual/fr/function.filter-list.php
         */

        //$filtres = filter_list();

        //foreach ($filtres as $key => $filtre) {
        //echo "<tr><td> $filtre</td><td>" . filter_id($filtre) . "</td></tr>";
        // }

        /*********************************** 2 filter_var()  *************************************************** */

        /**
         *Filtre une variable avec un filtre spécifique
         *https://www.php.net/manual/fr/function.filter-var.php
         *
         *Cette fonction prend 2 arguments  filter_var($variable_a_tester,NOM_DU_FILTRE)
         *
         *Elle va nous permettre aussi de vérifier si notre valeur est contenue dans une certaine fourchette 
         *pour faire cela, on doit utiliser des options ici min_range et max_range 
         *elles doivent être spécifié à l'intérieur d'un tableau associatif multidimensionnel.
         * 
         * 
         * 
         * 
         *Attention, pour 0, est problématique ne reconnais pas le 0 comme un nombre du coup, il faut le tester.
         */

        // $int1 = 100;
        // $int2 = 'aaaa';
        // $int3 = 0;

        // if ( !filter_var($int3, FILTER_VALIDATE_INT) === false ||
        //    filter_var($int3, FILTER_VALIDATE_INT) === 0
        // ) {
        //     echo "La variable contient bien un nombre entier valide <br>";
        //  } else {
        //     echo "La variable ne contient pas d'entier valide <br>";
        // }

        // $int1 = -10;
        // $int2 = 50;
        // $int3 = 150;

        // $min = 1;
        // $max = 100;

        //if (!filter_var($int3, FILTER_VALIDATE_INT, ['options' => ["min_range" => $min, "max_range" => $max]]) === false
        // ) {
        //     echo "Le nombre est dans la bonne fourchette <br>";
        // } else {
        //     echo "Nombre incorrect ou non entier <br>";
        //  }

        /**
         *Filtre une variable avec un filtre spécifique
         *
         *Ici, on filtre les emails avec un bon format que nous passons dans un premier temps une variable avec FILTER_SANITIZE_EMAIL
         *Qui supprime tous les caractères sauf les lettres, chiffres, et !#$%&'*+-=?^_`{|}~@.[].
         *Puis dans une condition, on vérifie si l'adresse mail est valide avec FILTER_VALIDATE_EMAIL
         *Valide une adresse de courriel.
         *https://www.php.net/manual/fr/function.filter-var.php
         *
         */


        // $email1 = "test@gmail.com";
        // $email2 = "jesuisadresse@gmail";

        //  $emailFilter = filter_var($email2, FILTER_SANITIZE_EMAIL);

        //  if ( !filter_var($emailFilter, FILTER_VALIDATE_EMAIL) === false
        //  ) {
        //    echo "L'email $emailFilter est valide <br>";
        // } else {
        //     echo "L'email $emailFilter n'est pas valide <br>";
        //  }


        $email = "te///s)))t@gmail.com";

        $emailFilter = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($emailFilter, FILTER_VALIDATE_EMAIL) === false) {

            if ($emailFilter != $email) {
                echo "Le mail possede desomer le bon format <br>
                le mail envoyer $email <br>
                mail apres transformation $emailFilter";
            } else {
                echo 'adresse mail OK';
            }
        } else {
            echo 'adresse mail invalide';
        }


        /*********************************** 3  *************************************************** */


        /*********************************** 4  *************************************************** */
        /*********************************** 5  *************************************************** */
        /*********************************** 6  *************************************************** */
        /*********************************** 7  *************************************************** */
        /*********************************** 8  *************************************************** */
        ?>
    </table>
</body>

</html>