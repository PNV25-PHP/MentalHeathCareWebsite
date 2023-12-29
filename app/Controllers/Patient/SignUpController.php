<?php

namespace App\Controllers\Patient;

use App\Dtos\Patient\SignUpReq;
use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use App\Repositories\PatientRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller;

class SignUpController extends Controller
{
    private UserRepository $userRepository;
    private PatientRepository $patientRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->patientRepository = new PatientRepository();
    }

    public function index()
    {
        return view('SignUp');
    }

    public function signUp(Request $req): JsonResponse
    {
        $signUpReq = new SignUpReq($req);
        // $signUpReq->validate();

       $newUser = new User(Role::Patient, $signUpReq->email, $signUpReq->password, $signUpReq->fullname);
        $newPatient = new Patient($newUser->id);

        $this->userRepository->insert($newUser);
        $this->patientRepository->insert($newPatient);

        return response()->json([
            'message' => 'Đăng kí thành công',
            'data' => [
                'user' => $newUser
            ],
        ], Response::HTTP_CREATED);
    }
}
