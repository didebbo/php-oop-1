<?php

require_once __DIR__ . "/classes/Movie.php";


$movies = [
    new Movie(
        [
            "titolo" => "Venom - La furia di Carnage",
            "descrizione" => "Dopo aver trovato un corpo ospite nel giornalista investigativo Eddie Brock, il simbionte alieno dovrà affrontare un nuovo nemico, Carnage, alter ego del serial killer Cletus Kasady. Nella scena post credits del primo film, infatti, Eddie Brock in sella alla sua moto raggiunge la prigione di San Quentin per intervistare l'omicida. Durante il loro breve dialogo, Kasady preannuncia che riuscirà a uscire dalla prigione e a compire una nuova carneficina. Il killer, infatti, riesce a evadere dal carcere, ospitando un simbionte alieno, il rosso Carnage, che seminerà il terrore in città. Solo Brock e il suo Venom possono fermarlo.",
            "punteggio" => 69,
        ]
    ),
    new Movie(
        [
            "titolo" => "Dune",
            "descrizione" => "
        
                In un distante futuro dell'umanità, il duca Leto Atreides accetta la gestione del pericoloso pianeta di Arrakis, anche noto come Dune, l'unica fonte della sostanza più preziosa dell'universo, \"la spezia\", una droga che allunga la vita, fornisce capacità mentali sovrumane e rende possibili i viaggi nello spazio. Nonostante Leto sappia che l'offerta è parte di una complessa trappola creata dai suoi nemici, decide di partire per Arrakis, portando con sé la sua concubina Bene Gesserit Lady Jessica, il giovane figlio ed erede Paul, e i suoi più fidati consiglieri. Leto prende il controllo di un'operazione di estrazione della spezia, resa pericolosa dalla presenza di enormi vermi delle sabbie. Un amaro tradimento conduce Paul e Jessica dai Fremen, nativi di Arrakis che vivono nel deserto più profondo.
                ",
            // "punteggio" => 121,
        ]
    )
];

$movies[1]->setPunteggio(80);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <?php foreach ($movies as $movie) : ?>
        <h2>
            <?= $movie->getTitolo(); ?>
        </h2>
        <p>
            <?= $movie->getDescrizione(); ?>
        </p>
        <p>
            Punteggio: <?= $movie->getPunteggio(); ?>
        </p>
        <hr>
    <?php endforeach ?>
</body>

</html>