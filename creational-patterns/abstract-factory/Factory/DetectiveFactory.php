<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Factory;

use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Films\DetectiveFilm;
use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Films\Film;
use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Serials\DetectiveSerial;
use DesignPatterns\CreationaPatterns\AbstractFactory\Models\Serials\Serial;

class DetectiveFactory implements MediaFactory
{
    public function createFilm(): Film
    {
        return new DetectiveFilm();
    }

    public function createSerial(): Serial
    {
        return new DetectiveSerial();
    }
}