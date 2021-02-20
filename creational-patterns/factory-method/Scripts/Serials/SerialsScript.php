<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Serials;

use DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Script;

class SerialsScript implements Script
{
    private $fillers = 'More fillers';

    public function __construct($fillers)
    {
        $this->fillers = $fillers;
    }

    public function title(): void
    {
        echo 'Watch' . $this->fillers;
    }

    public function concept($idea): void
    {
        echo 'My concept based on my' . $idea;
    }

    public function content(): void
    {
        echo 'Fillers and' . $this->fillers;
    }
}