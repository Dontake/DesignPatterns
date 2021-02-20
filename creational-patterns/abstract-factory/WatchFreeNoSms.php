<?php

namespace DesignPatterns\CreationaPatterns\AbstractFactory;

use DesignPatterns\CreationaPatterns\AbstractFactory\Factory\HorrorFactory;
use DesignPatterns\CreationaPatterns\AbstractFactory\Factory\MediaFactory;

class WatchFreeNoSms
{
    public $title;

    public $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function makePoster(MediaFactory $factory): string
    {
        $serial = $factory->createSerial();

        $serialPoster = $serial->getEpisodeTitle() . $serial->getEpisodeContent();
        return $serialPoster;
    }

    public function getHorrorSerial()
    {
        return $this->makePoster(new HorrorFactory());
    }
}