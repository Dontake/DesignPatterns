<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Models\Films;

class HorrorFilm implements Film
{
    public function getTitle(): string
    {
        return 'Eraserhead';
    }

    public function getContent(): string
    {
        return 'I killing my child';
    }
}