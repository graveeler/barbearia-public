<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct('users', ['name', 'nick', 'cpf', 'email', 'password'], 'id', true);
    }
}
