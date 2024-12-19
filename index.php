
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Library CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="./style/reset.css" rel="stylesheet">
        <link href="./style/style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Kenko</title>
    </head>
    <body>
        
        <h1>Affichage des recettes</h1>

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

        if (array_key_exists('titre', $recettes)) {
            echo 'La clé "titre" se trouve dans le tableau !';
        };
      ?>
        
    </body>
</html>