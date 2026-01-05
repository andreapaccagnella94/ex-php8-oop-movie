<?php

// definisco la classe Genre
class Genre
{
    // proprità della classe
    public $name;
    public $description;

    // definisco il costruttore
    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }
}
