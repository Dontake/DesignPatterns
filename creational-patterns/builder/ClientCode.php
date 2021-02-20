<?php


class ClientCode
{
    public function clientCode(Director $director)
    {
        $builder = new Netflix();
        $director->setBuilder($builder);

        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        echo "Custom product:\n";
        $builder->addBlack();
        $builder->addLgbt();
        $builder->getProduct()->listParts();
    }
    public function get()
    {
        $director = new Director();
        $this->clientCode($director);
    }
}