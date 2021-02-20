<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Films;

use DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Script;
use DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Serials\FilmsScript;
use DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Writer;

class FilmsScriptWriter extends Writer
{
    private $concept, $content;

    public function __construct(string $concept, string $content)
    {
        $this->concept = $concept;
        $this->content = $content;
    }

    public function writeScripts():Script
    {
        return new FilmsScript($this->concept, $this->content);
    }
}