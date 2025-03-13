<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = course::all();

        if(request()->ajax()) {
            return response()->json($courses);
        }

        return view('courses.index', compact('courses'));
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $courses = Course::create($request->all());

        if ($request->ajax()) {
            return response()->json(['message' => 'Course added successfully!', 'course' => $course]);
        }

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
