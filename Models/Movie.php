<?php

// definisco la classe Movie
class Movie
{
    // proprità della classe
    public $title;
    public $director;
    public array  $genre; // sappiamo già che dovrà essere una classe anche lui e che potranno essere più di una
    public $releaseYear;
    public $description;

    // definisco il costruttore
    public function __construct($_title, $_director, $_releaseYear, $_description)
    {
        $this->title = $_title;
        $this->director = $_director;
        // $this->genre = $_genre;
        $this->releaseYear = $_releaseYear;
        $this->description = $_description;
    }

    // mi creo un metodo che aggiunge i generi
    public function addGenre(Genre $genre)
    {
        $this->genre[] = $genre;
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

    public function getGenre()
    {
        return $this->genre;
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
