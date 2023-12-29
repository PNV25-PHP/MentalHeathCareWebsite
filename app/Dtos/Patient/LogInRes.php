<?php

namespace App\Dtos\Patient;

use Illuminate\Http\Request;

class LoginRes
{
    public string $id;
    public string $role;
    public string $email;
    public string $password;
    public string $fullname;
    public string $address;
    public string $phone;
    public string $url_image;

    public function __construct(
        string $id,
        string $role,
        string $email,
        string $fullname,
        string $phone = '',
        string $address = '',
        string $url_image = ''
    ) {
        $this->id = $id;
        $this->role = $role;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->phone = $phone;
        $this->address = $address;
        $this->url_image = $url_image;
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getUrlImage(): string
    {
        return $this->url_image;
    }

    public function setUrlImage(string $url_image): void
    {
        $this->url_image = $url_image;
    }
}
