<?php

class Serial
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Serial parts: " . implode(', ', $this->parts) . "\n\n";
    }
}