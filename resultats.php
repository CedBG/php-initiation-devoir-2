<?php

    var_dump($_GET);

    $cinema = [
        ['film' => 'Le Parrain ', 'year' => '1972', 'description' => 'Le patriarche vieillissant d\'une dynastie de la mafia New Yorkaise passe le flambeau de son empire clandestin à son fils réticent.'],
        ['film' => 'Le Parrain, 2ᵉ partie', 'year' => '1974', 'description' => 'La vie et la carrière de Vito Corleone dans les années 1920 à New York alors que son fils, Michael, élargit et renforce son emprise sur le syndicat du crime familial.'],
        ['film' => ' Jurassic Park ', 'year' => '1993', 'description' => 'Grâce à l\'ADN fossilisé dans l\'ambre, John Hammond donne vie à plusieurs espèces de dinosaures et crée Jurassic Park, un parc à thème sur une île du Costa Rica.'],
        ['film' => 'Le Roi Lion', 'year' => '1994', 'description' => 'Le prince lion Simba et son père sont pris pour cible par son oncle amer, qui veut lui-même monter sur le trône.'],
        ['film' => 'La ligne verte', 'year' => '1999', 'description' => 'La vie des gardes du couloir de la mort est touchée par l\'un de leurs détenus: a homme noir accusé de meurtre et de viol d\'enfants, doté d\'un pouvoir mystérieux.']
        
    ];

//    var_dump($cinema);

    if(isset($_GET['city']) AND !empty($_GET['departureTime'])){
        $city = $_GET['city'];
        $time = $_GET['departureTime'];
    }

    $count = 0;
    foreach ($travels as $travel) {
        if ($city === $travel['departure']) {
            $count++;
        }
    }
?>

    <div class="container">
        <?php if ($count == 1): ?>
            <h1>Votre itinéraire</h1>
        <?php else: ?>
            <h1>Vos itinéraires</h1>
        <?php endif; ?>
<!--        <div class="card w-50">-->
            <?php
                foreach ($travels as $travel) {
                    if (($city === $travel['departure']) AND ($time === $travel['departureTime'])){
            ?>
                            <ul class="list-group w-50 mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span> Départ de : <?= $travel['departure'] ?></span>
                                    <span class="badge bg-primary rounded-pill"><?= $travel['departureTime'] ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span> Arrivée à : <?= $travel['arrival'] ?></span>
                                    <span class="badge bg-success rounded-pill"><?= $travel['arrivalTime'] ?></span>
                                </li>
                                <li class="list-group-item bg-secondary d-flex justify-content-between align-items-center text-end">
                                    <span class="text-white fw-bolder"> Conduit par : <?= $travel['driver'] ?></span>
                                </li>
                            </ul>
            <?php
                    }
                }
            ?>
