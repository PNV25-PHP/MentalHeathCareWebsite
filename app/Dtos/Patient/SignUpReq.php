<?php

namespace App\Dtos\Patient;

use Illuminate\Http\Request;

class SignUpReq
{
    public string $email;
    public string $password;
    public string $fullname;

    public function __construct(Request $req)
    {
        $this->email = $req->input("email");
        $this->password = $req->input("password");
        $this->fullname = $req->input("fullname");
    }

    public function validate()
    {
        // TODO check if email valid
        // TODO check if email exist
        // TODO check if password valid
        // TODO check if fullName valid
    }
}
