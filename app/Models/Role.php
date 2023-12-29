<?php

namespace App\Models;

enum Role
{
    case Admin;
    case Doctor;
    case Patient;

    public function getValue(): string
    {
        return match ($this)
        {
            Role::Admin => "Admin",
            Role::Doctor => "Doctor",
            Role::Patient => "Patient",
        };
    }

    
}
