<?php

namespace App\Models;

enum Role
{
    case Tructiep;
    case Zalo;

    public function getValue(): string
    {
        return match ($this) {
            Role::Tructiep => "Tructiep",
            Role::Zalo => "Zalo",
        };
    }
}
