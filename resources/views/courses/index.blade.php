
        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Courses</h1>
            <input type="text"for="label"><a href="{{route.('courses.index') }}"></a>
            <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Manage Courses</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>{{$course->age}}</td>
                            <td>
                                <a href="{{ route('courses.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('courses.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('courses.destroy', $student->id) }}" method="POST" style="display:inline;">
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