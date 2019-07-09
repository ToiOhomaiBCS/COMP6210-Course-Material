<?php

namespace App\Models;

class User 
{
    private $first_name;

    public function setFirstname($name)
    {
        $this->first_name = $name;
    }

    public function getFirstname()
    {
        return $this->first_name;
    }
}