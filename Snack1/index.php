<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
  
  <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

  <?php

    $incontri= [
     
    [
      'squadraHome' => 'Olimpia Milano',
      'squadraAway' => 'Pesaro',
      'totaliPhome' => rand(1,100),
      'totaliPaway' => rand(1,100),
    ],
    [
      'squadraHome' => 'Genoa',
      'squadraAway' => 'Roma',
      'totaliPhome' => rand(1,100),
      'totaliPaway' => rand(1,100),
    ],
    [
      'squadraHome' => 'Messina',
      'squadraAway' => 'Catania',
      'totaliPhome' => rand(1,100),
      'totaliPaway' => rand(1,100),
    ],
    [
      'squadraHome' => 'Milano',
      'squadraAway' => 'Trento',
      'totaliPhome' => rand(1,100),
      'totaliPaway' => rand(1,100),
    ],
    [
      'squadraHome' => 'Verona',
      'squadraAway' => 'Treviso',
      'totaliPhome' => rand(1,100),
      'totaliPaway' => rand(1,100),
    ],
  ];
  ?>

  <ul>
    <?php foreach ($incontri as $incontro) { ?>

      <li>
        <?php echo $incontro['squadraHome'] ?> - <?php echo $incontro['squadraAway'] ?> |  <?php echo $incontro['totaliPhome'] ?>-<?php echo $incontro['totaliPaway'] ?>
      </li>
    <?php } ?>
  </ul>

</body>
</html>