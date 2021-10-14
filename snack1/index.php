
<?php 

$matches = [
    [
        "squadra1" => "Milano",
        "squadra2" => "Genova",
        "point1" => 20,
        "point2" => 30,
    ],
    [
        "squadra1" => "Roma",
        "squadra2" => "Napoli",
        "point1" => 20,
        "point2" => 30,
    ],
    [
        "squadra1" => "Trento",
        "squadra2" => "Torino",
        "point1" => 78,
        "point2" => 67,
    ],
    [
        "squadra1" => "Bologna",
        "squadra2" => "Avellino",
        "point1" => 23,
        "point2" => 40,
    ],
    [
        "squadra1" => "Macerata",
        "squadra2" => "Cosenza",
        "point1" => 82,
        "point2" => 76,
    ],
    [
        "squadra1" => "Bari",
        "squadra2" => "Firenze",
        "point1" => 13,
        "point2" => 26,
    ],
    [
        "squadra1" => "Pisa",
        "squadra2" => "Spezia",
        "point1" => 12,
        "point2" => 89,
    ],
    [
        "squadra1" => "Varese",
        "squadra2" => "Potenza",
        "point1" => 2,
        "point2" => 50,
    ],
];
?>

<?php foreach($matches as $match){
    
?>

<p><?php echo $match["squadra1"] ."  ".  $match["squadra2"] . " | " . $match["point1"] . " - " . $match["point2"] ?></p>

<?php } ?>

