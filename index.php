<?php

    var_dump($_GET);

    $cinemas = [
        ['films' => 'Le Parrain ', 'year' => '1972', 'description' => 'Le patriarche vieillissant d\'une dynastie de la mafia New Yorkaise passe le flambeau de son empire clandestin à son fils réticent.'],
        ['films' => 'Le Parrain, 2ᵉ partie', 'year' => '1974', 'description' => 'La vie et la carrière de Vito Corleone dans les années 1920 à New York alors que son fils, Michael, élargit et renforce son emprise sur le syndicat du crime familial.'],
        ['films' => ' Jurassic Park ', 'year' => '1993', 'description' => 'Grâce à l\'ADN fossilisé dans l\'ambre, John Hammond donne vie à plusieurs espèces de dinosaures et crée Jurassic Park, un parc à thème sur une île du Costa Rica.'],
        ['films' => 'Le Roi Lion', 'year' => '1994', 'description' => 'Le prince lion Simba et son père sont pris pour cible par son oncle amer, qui veut lui-même monter sur le trône.'],
        ['films' => 'La ligne verte', 'year' => '1999', 'description' => 'La vie des gardes du couloir de la mort est touchée par l\'un de leurs détenus: a homme noir accusé de meurtre et de viol d\'enfants, doté d\'un pouvoir mystérieux.']
        
    ];

    print_r ($cinemas)

    if(isset($_GET['film']) && !empty($_GET['year'])){
        $film = $_GET['film'];
        $year = $_GET['year'];
    }

    foreach ($cinemas as $cinema) {
        if ($films === $films['film']) {
            $count++;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php initiation - devoir 2</title>
</head>
<body>
<div class="row mb-3">
                <div class="col-sm-5 offset-sm-2">
                    <select id="year" name="year" class="form-select">
                        <option selected>Choisissez votre année de film</option>
                        <option <?= $cinemas['cinema'] ?> value="1972">1972</option>
                        <option <?= $cinemas['cinema'] ?> value="1974">1974</option>
                        <option <?= $cinemas['cinema'] ?> value="1993">1993</option>
                        <option <?= $cinemas['cinema'] ?> value="1994">1994</option>
                        <option <?= $cinemas['cinema'] ?> value="1999">1999</option>
                    </select>
                </div>
            </div>
</body>
</html>