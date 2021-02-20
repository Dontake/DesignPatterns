<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Models\Serials;

class HorrorSerial implements Serial
{
    public function getEpisodeTitle(): string
    {
        return 'Episode I: New Cucumber Pig';
    }

    public function getEpisodeContent(): string
    {
        return 'Watch on me, i am cucumber';
    }
}