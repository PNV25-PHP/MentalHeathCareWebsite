<?php

namespace App\Controllers\Patient;

use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class BookingController extends Controller
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
        return view('#');
    }

    public function dataDoctors()
    {
        $query = new DoctorRepository();
        $result = $query->selectAll();
        var_dump($result);
        return $result;
    }

    public function booking(Request $req)
    {
        
    }
}
