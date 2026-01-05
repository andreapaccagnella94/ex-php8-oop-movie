<?php

trait Rating
{
    protected array $ratings;

    // Metodo per aggiungere una valutazione
    public function addRating($rating)
    {
        if ($rating >= 1 && $rating <= 5) {
            $this->ratings[] = $rating;
        }
    }

    // Metodo per ottenere la media
    public function getAverageRating()
    {
        if (count($this->ratings) === 0) {
            return 0.0;
        }
        return array_sum($this->ratings) / count($this->ratings);
    }
}
