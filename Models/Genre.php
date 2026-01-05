<?php

// definisco la classe Genre
class Genre
{
    // proprità della classe
    protected $name;
    protected $description;

    // definisco il costruttore
    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }

    // siccome sono protected allora mi faccio i getter
    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
