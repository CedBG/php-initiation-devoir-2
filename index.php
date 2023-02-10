<?php

    var_dump($_GET);

    $cinema = [
        ['films' => 'Le Parrain ', 'year' => '1972', 'description' => 'Le patriarche vieillissant d\'une dynastie de la mafia New Yorkaise passe le flambeau de son empire clandestin à son fils réticent.'],
        ['films' => 'Le Parrain, 2ᵉ partie', 'year' => '1974', 'description' => 'La vie et la carrière de Vito Corleone dans les années 1920 à New York alors que son fils, Michael, élargit et renforce son emprise sur le syndicat du crime familial.'],
        ['films' => ' Jurassic Park ', 'year' => '1993', 'description' => 'Grâce à l\'ADN fossilisé dans l\'ambre, John Hammond donne vie à plusieurs espèces de dinosaures et crée Jurassic Park, un parc à thème sur une île du Costa Rica.'],
        ['films' => 'Le Roi Lion', 'year' => '1994', 'description' => 'Le prince lion Simba et son père sont pris pour cible par son oncle amer, qui veut lui-même monter sur le trône.'],
        ['films' => 'La ligne verte', 'year' => '1999', 'description' => 'La vie des gardes du couloir de la mort est touchée par l\'un de leurs détenus: a homme noir accusé de meurtre et de viol d\'enfants, doté d\'un pouvoir mystérieux.']
        
    ];

$_GET['year'];
$_GET['description'];

echo '<pre>';
print_r($cinema);
echo '</pre>;'

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php initiation - devoir 2</title>
</head>
<body>

    <ul>
        <?php foreach ($cinema as $film):?>
            <li><a href="index.php?year=<?php echo $film['year']?>"><?php echo $film['year']?></a></li>
            <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($cinema as $film):?>
            <p><?php echo $film['description']?></p>
            <?php endforeach; ?>
    </ul>
        
</body>
</html>