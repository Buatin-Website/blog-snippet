<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            'Backend',
            'Frontend',
            'UX/UI',
        ];

        foreach ($departments as $department) {
            Department::firstOrCreate(['name' => $department]);
        }
    }
}
