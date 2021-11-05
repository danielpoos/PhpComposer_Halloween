<?php 

namespace Petrik14S\PoosDaniel\Halloween\Models;

class Lako {
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}