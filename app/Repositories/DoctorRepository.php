<?php

namespace App\Repositories;

use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorRepository
{
    private string $tableName = "patients";

    public function insert(Doctor $doctor)
    {
        $sql = "INSERT INTO $this->tableName (ID, UserId) VALUES (?, ?)";

        // Truyền các giá trị vào placeholder
        DB::insert($sql, [
            $doctor->getId(),
            $doctor->getUserId(),

        ]);
    }
    public function selectAll()
    {
        $doctors = DB::select("SELECT * FROM doctors");
        return $doctors;
    }
    
}
