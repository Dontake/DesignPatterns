<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Models\Serials;

interface Serial
{
    public function getEpisodeTitle(): string;

    public function getEpisodeContent(): string;
}