<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    public function exportToPDF()
    {
        $employees = Employee::all();

        view()->share('employees', $employees);

        $pdf = Pdf::loadView('employees.table', $employees->toArray());

        return $pdf->download('employees.pdf');
    }
}
