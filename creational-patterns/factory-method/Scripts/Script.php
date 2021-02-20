<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\Scripts;

Interface Script
{
    public function title(): void;

    public function concept($idea): void;

    public function content(): void;
}
