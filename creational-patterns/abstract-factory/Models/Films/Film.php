<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory\Models\Films;

interface Film
{
    public function getTitle(): string;

    public function getContent(): string;
}