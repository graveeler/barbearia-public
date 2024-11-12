<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class Service extends DataLayer
{
    public function __construct()
    {
        parent::__construct('services', ['name'], 'id', true);
    }
}
