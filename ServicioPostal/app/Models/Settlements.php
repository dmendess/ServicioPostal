<?php

namespace App\Models;


use JsonSerializable;
class Settlements implements JsonSerializable
{
    protected $key;
    protected $name;
    protected $zoneType;
    protected $type;

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
