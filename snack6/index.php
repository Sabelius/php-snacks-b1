<?php 

$class = [
     [
         "nome" => "Uncle",
         "cognome" => "Scrooge",
         "voti" => [30, 21, 25, 27],
     ],
     [
        "nome" => "Donald",
        "cognome" => "Duck",
        "voti" => [30, 24, 25, 18],
    ],
    [
        "nome" => "Mickey",
        "cognome" => "Mouse",
        "voti" => [30, 19, 30, 30],
    ],
    [
        "nome" => "Goofy",
        "cognome" => "Goose",
        "voti" => [24, 24, 25, 23],
    ],

]
?>


<?php foreach($class as $student){
?>
    <h3><?php echo $student["nome"] . " " . $student["cognome"] . " | " . (array_sum($student["voti"]) / count($student["voti"])) ?></h3>

<?php } ?>