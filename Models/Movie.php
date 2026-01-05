<?php

// definisco la classe Movie
class Movie
{
    // proprità della classe
    public $title;
    public $director;
    //protected Genre $genre; // sappiamo già che dovrà essere una classe anche lui e che potranno essere più di una
    // se vogliamo più generi serve un array
    protected array $genres = [];
    public $releaseYear;
    public $description;

    // definisco il costruttore
    public function __construct($_title, $_director, $_genre, $_releaseYear, $_description)
    {
        $this->title = $_title;
        $this->director = $_director;
        // $this->genre = $_genre; non serve più perchè ora dovremmo fare la verifica che il singolo genere soddisfi Genre
        $this->releaseYear = $_releaseYear;
        $this->description = $_description;
        // verifica se i generei rispecchiano Genre sia array che variabile singola
        if (is_array($_genre)) {
            foreach ($_genre as $g) {
                if ($g instanceof Genre) {
                    $this->genres[] = $g;
                }
            }
        } elseif ($_genre instanceof Genre) {
            $this->genres[] = $_genre;
        }
    }

    // mi creo un metodo che aggiunge i generi e per sapere quali sono visto che sono protected sia il nome singolo
    public function addGenre(Genre $genre)
    {
        $this->genres[] = $genre;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function getGenreName()
    {
        return array_map(function ($g) {
            return $g->getName();
        }, $this->genres);
    }


    // uso il trait per le valutazione
    use Rating;

    // mi creo semplicemente i getter delle variabili
    public function getTitle()
    {
        return $this->title;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
