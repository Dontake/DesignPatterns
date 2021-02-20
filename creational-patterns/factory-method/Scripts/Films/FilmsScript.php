<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Serials;

use DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Script;

class FilmsScript implements Script
{
    private $concept = 'More surrealism';
    private $content = 'Owls';
    private $title = 'Owls are not what they seem';

    public function __construct($concept, $content)
    {
        $this->concept = $concept;
        $this->content = $content;
    }

    public function title(): void
    {
        echo 'Watch' . $this->title;
    }

    public function concept($idea): void
    {
        echo $this->concept . 'based on my' . $idea;
    }

    public function content(): void
    {
        echo 'Fillers and' . $this->content;
    }
}