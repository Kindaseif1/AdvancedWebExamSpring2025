@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Course List</h1>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary mb-3">Back to courses</a>
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Cours name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                    <button type="submit" class="btn btn-primary">Add Course</button>
                </div>
            </form>
        </div>
