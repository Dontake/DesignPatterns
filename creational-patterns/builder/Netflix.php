<?php

class Netflix implements MediaBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->product = new Serial();
    }

    public function addTransGender(): string
    {
        $this->product->parts[] = 'More Trans!';
    }

    public function addBlack(): string
    {
        $this->product->parts[] = 'More Black!';
    }

    public function addLgbt(): string
    {
        $this->product->parts[] = 'More Lgbt!';
    }

    public function addBubbs(): string
    {
        $this->product->parts[] = 'No More Bubbs!';
    }

    public function addDragons(): string
    {
        $this->product->parts[] = 'No More Dragons!';
    }

    public function getProduct(): Serial
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}