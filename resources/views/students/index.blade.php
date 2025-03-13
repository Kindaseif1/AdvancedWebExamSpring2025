@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Students</h1>
            <input type="text"for="label"><a href="{{route.('students.index') }}"></a>
            <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Manage Student</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>age</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{$student->age}}</td>
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection