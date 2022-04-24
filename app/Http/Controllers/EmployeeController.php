<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $employees = Employee::query();
        $employees->with(['department']);
        $employees->when($request->filled('name'), fn($query) => $query->where('name', 'like', '%'.$request->name.'%'));
        $employees->when($request->filled('department_id'), fn($query) => $query->where('department_id', $request->department_id), fn($query) => $query->where('department_id', null));
        return view('employee.index', [
            'employees' => $employees->get(),
        ]);
    }
}