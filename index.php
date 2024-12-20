
<?php
        $recettes = [
            [
                'titre' => 'Cassoulet <br />',
                'recette' => 'Étape 1 : Mettre les flageolets à tremper toute une nuit, <br />Étape 2 : Mettre les flageolets avec les tomates ... <br />',
                'auteur' => 'chrisrodriguez@hotmail.be',
                'estActive' => true,
            ],
            [
                'titre' => 'Couscous <br />',
                'recette' => 'Étape 1 : Mettre les légumes dans la casserole, <br />Étape 2 : Mettre la viandes ... <br />',
                'auteur' => 'ginettemanfroid@hotmail.be',
                'estActive' => false,
            ],
            [
                'titre' => 'Cassoulet <br />',
                'recette' => 'Étape 1 : Mettre les flageolets à tremper toute une nuit, <br />Étape 2 : Mettre les flageolets avec les tomates ... <br />',
                'auteur' => 'chrisrodriguez@hotmail.be',
                'estActive' => true,
            ],
            [
                'titre' => 'Escalope Milanaise <br />',
                'recette' => 'Étape 1 : Paner les tranches de viande, <br />Étape 2 : Mettre la viandes ... <br />',
                'auteur' => 'jeandujardin@hotmail.be',
                'estActive' => false,
            ],
        ];

      ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Library CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="./assets/style/reset.css" rel="stylesheet">
        <link href="./assets/style/style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Kenko</title>
    </head>
    <body>
        <main>
            <div class="conatiner">
                <div class="row">
                    <div class="col-md-12 text-center">
                    <h1 class="caveatTitle text-center my-5">Affichage des recettes</h1>

                    <!-- Boucle sur les recettes -->
                     <?php foreach ($recettes as $recette) :  ?>
                     <!--  Si la clé existe et a pour valeur "Faux", on affiche -->
                     <?php if (array_key_exists ('estActive', $recette) && $recette['estActive'] == false) : ?>

                                <article>
                                    <h3 class="m-3"><?php echo $recette['titre']; ?></h3>
                                    <p class="m-3"><?php echo $recette['recette']; ?></p>
                                    <i class="m-3"><?php echo $recette['auteur']; ?></i>
                                </article>
                            <?php endif; ?>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center my-5">
                        <h3 class="my-5">Les fonctions</h3>
                     
                        <?php
                            $recette = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse';
                            $longueur = strlen($recette);

                            echo 'La phrase contient ' . $longueur .'caractères : ' . PHP_EOL . $recette;
                            echo "<br />";
                        ?>
                        <?php
                            echo str_replace('c', 'C', 'Le cassoulet c\'est très bon !');
                            echo "<br />";
                            $jour = date('d');
                            $mois = date('m');
                            $annee = date('Y');
                            //Récup de l'heure :
                            $heure = date('H');
                            $minutes = date('i');

                            echo 'Nous sommes le :' . $jour . '/' . $mois . '/' . $annee . " " . 'Et il est : ' . $heure . ':' . $minutes . PHP_EOL;
                            echo "<br />";

                            function recetteOK (array $recette) : bool {
                                if (array_key_exists('estActive', $recette)) {
                                    $result = $recette['estActive'];
                                } else {
                                    $result = false;
                                }

                                return $result;
                            };

                            $recetteCouscous = [
                                        'titre' => 'Couscous <br />',
                                        'recette' => 'Étape 1 : Mettre les légumes dans la casserole, <br />Étape 2 : Mettre la viandes ... <br />',
                                        'auteur' => 'ginettemanfroid@hotmail.be',
                                        'estActive' => false,
                            ];
                            $recetteCassoulet = [
                                        'titre' => 'Cassoulet <br />',
                                        'recette' => 'Étape 1 : Mettre les flageolets à tremper toute une nuit, <br />Étape 2 : Mettre les flageolets avec les tomates ... <br />',
                                        'auteur' => 'chrisrodriguez@hotmail.be',
                                        'estActive' => true,
                            ];

                            $recetteCouscousOK = recetteOK($recetteCassoulet);
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>