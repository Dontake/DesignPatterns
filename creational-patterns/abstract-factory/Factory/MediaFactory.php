<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Factory;

use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Serials\Serial;
use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Films\Film;

interface MediaFactory
{
    public function createFilm(): Film;

    public function createSerial(): Serial;
}