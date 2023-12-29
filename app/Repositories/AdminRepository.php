<?php

namespace App\Repositories;

use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminRepositorry
{
    private string $tableName = "patients";

    public function insert(Admin $admin)
    {
        $sql = "INSERT INTO $this->tableName (ID, UserId) VALUES (?, ?)";

        // Truyền các giá trị vào placeholder
        DB::insert($sql, [
            $admin->getId(),
            $admin->getUserId(),
        ]);
    }

    public function selectAll()
    {
        $admins = "SELECT * FROM admins";

        return $admins;
    }
}
