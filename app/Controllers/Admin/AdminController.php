<?php
namespace App\Controllers\Admin;
use App\Repositories\AdminRepositorry;
use App\Repositories\PatientRepository;
use App\Repositories\UserRepository;
use Laravel\Lumen\Routing\Controller;

class AdminController extends Controller{
    private UserRepository $userRepository;
    private AdminRepositorry $adminRespository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->adminRespository = new AdminRepositorry();
    }

    public function index(){
        return view();
    }

    public function viewPatient(){
        $query = new PatientRepository();
        $result = $query->selectAll();
        var_dump($result);
        return $result;
    }
}
?>