<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Serials;

use DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Script;
use DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Writer;

class SerialScriptWriter extends Writer
{
    private $fillers;

    public function __construct(string $fillers)
    {
        $this->fillers = $fillers;
    }

    public function writeScripts(): Script
    {
        return new SerialsScript($this->fillers);
    }
}