<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('department.index', [
            'title' => 'Department',
            'departments' => Department::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // belum digunakan
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // belum digunakan
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('department.show', [
            'title' => 'Detail Department',
            'department' => $department,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        // belum digunakan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        // belum digunakan
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        // belum digunakan
    }
}