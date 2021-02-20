<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Models\Films;

class DetectiveFilm implements Film
{
    public function getTitle(): string
    {
        return 'Sherlock Watson';
    }

    public function getContent(): string
    {
        return 'Elementary';
    }
}