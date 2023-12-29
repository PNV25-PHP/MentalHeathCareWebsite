<?php

namespace App\Controllers\Commom;

use App\Dtos\Patient\LogInReq;
use App\Dtos\Patient\LogInRes;
use App\Repositories\PatientRepository;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class loginController extends Controller
{
    private UserRepository $userRepository;
    private PatientRepository $patientRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->patientRepository = new PatientRepository();
    }

    public function index(): View
    {
        return view('login');
    }

    public function login(Request $req)
    {
        $loginRequest = new LogInReq($req);

        $email = $loginRequest->getEmail();
        $password = $loginRequest->getPassword();

        $userRepository = new UserRepository();
        $user = $userRepository->findByEmail($email);

        if ($user == null) {
            return response()->json([
                'message' => 'Email not found',
                'email' => $email,
            ], 404);
        }

        if ($user->getPassword() != $password) {
            return response()->json([
                'message' => 'User not found or invalid credentials',
            ], 401);
        }

        return response()->json([
            'message' => 'User found',
            'payload' => new LogInRes($user->getId(), $user->getRole()->getValue(), $user->getEmail(), $user->getFullname(),  $user->getPhone(), $user->getAddress(), $user->getUrlImage())
        ], 200);
    }
}
