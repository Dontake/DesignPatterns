<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Factory;

use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Films\HorrorFilm;
use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Serials\HorrorSerial;
use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Serials\Serial;
use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Films\Film;

class HorrorFactory implements MediaFactory
{
    public function createFilm(): Film
    {
        return new HorrorFilm();
    }

    public function createSerial(): Serial
    {
        return new HorrorSerial();
    }
}