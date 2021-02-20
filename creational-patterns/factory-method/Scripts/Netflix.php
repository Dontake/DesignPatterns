<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\Scripts;

use DesignPatterns\CreationalPatterns\FactoryMethod\Scripts\Films\FilmsScriptWriter;

class Netflix
{
    public function clientCode(Writer $creator)
    {
        $creator->getScript("LGBT Lighting!");
        $creator->getScript("More niggers!");
    }

    public function release()
    {
        $this->clientCode(new FilmsScriptWriter("The Witcher", 'xxx'));
    }
}