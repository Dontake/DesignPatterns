<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Models\Serials;

class DetectiveSerial implements Serial
{
    public function getEpisodeTitle(): string
    {
       return 'Episode I: Ducktective Gus';
    }

    public function getEpisodeContent(): string
    {
        return 'Ducktective Gus - GAv GAv';
    }
}