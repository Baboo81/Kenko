
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
                    <div class="col-md-12">
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
            </div>
        </main>
    </body>
</html>