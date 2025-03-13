@extends('layouts.app')
@section('content')
<h2>Welcome to My Laravel App</h2>
<h5>Manage students and courses easily.</h5>
<button class="submit" action="{{rout('students.index)}}">Manage Students</button>
<button class="submit" action="{{rout('courses.index)}}">Manage Courses</button>
@endsection