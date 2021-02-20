<?php

class ClientCode
{
    public function showLanguage()
    {
       $options = ApplicationOptions::getInstance();
       echo $options->getLanguage();
    }
}