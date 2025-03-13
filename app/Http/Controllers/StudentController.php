<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        if(request()->ajax()) {
            return response()->json($students);
        }

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());

        if ($request->ajax()) {
            return response()->json(['message' => 'Student added successfully!', 'student' => $student]);
        }

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());

        if ($request->ajax()) {
            return response()->json(['message' => 'Student updated successfully!', 'student' => $students]);
        }

        return redirect()->route('recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        if ($request->ajax()) {
            return response()->json(['message' => 'Student deleted successfully!']);
        }

        return redirect()->route('students.index');
    }
}
