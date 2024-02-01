<?php

namespace App\Http\Controllers;

use App\Models\MjuStudent;
use Illuminate\Http\Request;

class MjuStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = MjuStudent::all();
            return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'student_code' => 'required|string|max:15',
            'first_name' => 'required|string|max:50',
            'first_name_en' => 'required|string|max:50',
            'major_id' => 'required|exists:majors,major_id',
            'idcard' => 'required||digits:13',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            ]);
            MjuStudent::create($validated);
            return response()->json(['message' => 'Student created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MjuStudent $mjuStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MjuStudent $mjuStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MjuStudent $mjuStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MjuStudent $mjuStudent)
    {
        //
    }
}
