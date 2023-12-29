<?php

namespace App\Repositories;

use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class PatientRepository
{
    private string $tableName = "patients";

    public function insert(Patient $patient)
    {
        $sql = "INSERT INTO $this->tableName (ID, UserId) VALUES (?, ?)";

        // Truyền các giá trị vào placeholder
        DB::insert($sql, [
            $patient->getId(),
            $patient->getUserId(),

        ]);
    }

    public function selectAll()
    {
        $patients = "SELECT * FROM patients";

        return $patients;
    }
}
