<?php

namespace App\Models;

use JsonSerializable;
use App\Models\FederalEntity;

class ZipCode implements JsonSerializable
{
    protected $zipCode;
    protected $locality;


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
