<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\Scripts;

abstract class Writer
{
    abstract public function writeScripts(): Script;

    public function getScript($idea)
    {
        $script = $this->writeScripts();

        $script->concept($idea);
        $script->title();
        $script->content();
    }
}