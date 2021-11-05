<?php

namespace Petrik14S\PoosDaniel\Halloween\Models;
use \DateTime;

class Esemeny{
    private $name;
    private $szervezo;
    private $resztvevok;
    private $ido;

    public function __construct(string $name, Lako $szervezo, array $resztvevok, DateTime $ido)
    {
        $this->name = $name;
        $this->szervezo = $szervezo;
        $this->resztvevok = $resztvevok;
        $this->ido = $ido;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSzervezo()
    {
        return $this->szervezo->getName();
    }
    public function getResztvevok()
    {
        foreach ($this->resztvevok as $resz) return $resz->getName();
    }
    public function getIdo()
    {
        return $this->ido;
    }
}