<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kenko</title>
    </head>
    <body>
        <?php $recettePouletActive = true; ?> 

            <?php if ($recettePouletActive) : ?>
                <h1>Liste des ingrédients</h1>
            <?php endif; ?> 

        <?php
          //User 1:
          $nom1 = 'Christel Rodriguez';
          $mail1 = 'chrisrodriguez@hotmail.be';
          $mdp1 = 'ffy412';
          $age1 = 43;
          //User 2:
          $nom2 = 'Michaël Merlette';
          $mail2 = 'michael@hotmail.be';
          $mdp2 = 'ffy412ffy412';
          $age2 = 47;
          //User 3:
          $nom3 = 'Victoria Merlette';
          $mail3 = 'victoria@hotmail.be';
          $mdp3 = 'ffy413ffy413';
          $age3 = 7;
          //User 4:
          $nom4 = 'Sacha Merlette';
          $mail4 = 'sacha@hotmail.be';
          $mdp4 = 'ffy414ffy41';
          $age4 = 6;

          $Chris = ['Christel Rodriguez', 'chrisrodriguez@hotmail.be', 'ffy412', '43'];
          $Michael = ['Michaël Merlette', 'michael@hotmail.be', 'ffy412ffy412', '47'];
          $Vicky = ['Victoria Merlette', 'victorai@hotmail.com', 'ffy413ffy413', '7'];
          $Sachou = ['Sacha Merlette', 'sacha@hotmail.be', 'ffy414ffy41', '6'];

          $allUsers = [$Chris, $Michael, $Vicky, $Sachou];

          echo $allUsers[2][0];

        ?>
        
    </body>
</html>