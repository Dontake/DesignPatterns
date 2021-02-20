<?php

class Director
{
    private $builder;

    public function setBuilder(MediaBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildMinimalViableProduct()
    {
        $this->builder->addBlack();
    }

    public function buildFullFeaturedProduct()
    {
        $this->builder->addTransGender();
        $this->builder->addBlack();
        $this->builder->addLgbt();
        $this->builder->addBubbs();
        $this->builder->addDragons();
    }
}
