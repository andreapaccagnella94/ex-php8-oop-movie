<?php
// definisco i generi per i miei film prima della creazione dei film
$sciFi = new Genre("Sci-FI", "Genere che esplora mondi immaginari, tecnologie avanzate, viaggi nel tempo, alieni e futuri possibili. Spesso affronta temi come l'evoluzione umana, l'intelligenza artificiale e l'impatto della scienza sulla società.");
$thriller = new Genre("Thriller", "Genere che mira a tenere lo spettatore sulle spine, con colpi di scena, suspense e tensione psicologica. La trama è spesso ricca di misteri, minacce e colpi di scena imprevedibili.");
$commedia = new Genre("Commedia", "Genere che ha come obiettivo principale far ridere lo spettatore, attraverso situazioni esilaranti, battute spiritose e personaggi simpatici o grotteschi.");
$drammatico = new Genre("Drammatico", "Genere che si concentra su temi seri e profondi come amore, perdita, conflitti interiori e relazioni umane. Spesso tocca emozioni forti e cerca di rappresentare la realtà in modo intenso.");


// creo delle istanze di film reali
$Inception = new Movie("Inception", "Christopher Nolan", $sciFi, 2010, "Un ladro esperto nel furto di segreti aziendali viene incaricato di un'impresa apparentemente impossibile: piantare un'idea nella mente di qualcun altro.");
$LaVitaEBella = new Movie("La vita è bella", "Roberto Benigni", $commedia, 1997, "Un ebreo italiano utilizza la fantasia e l'umorismo per proteggere suo figlio dalle atrocità di un campo di concentramento nazista.");

// aggiungo i generi collegati a Genre
// $Inception->addGenre($sciFi);
// $Inception->addGenre($thriller);
// $Inception->genre = ["ciao", "pierino"]; // perdo la relazione con Genre

// $LaVitaEBella->addGenre($commedia);
// $LaVitaEBella->addGenre($drammatico);

// aggiungo un po' di valutazioni
$Inception->addRating(5);
$Inception->addRating(4);
$Inception->addRating(1);
$Inception->addRating(3);

$LaVitaEBella->addRating(5);
$LaVitaEBella->addRating(3);
$LaVitaEBella->addRating(2);
$LaVitaEBella->addRating(2);

$movies = [$Inception, $LaVitaEBella];
