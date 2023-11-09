@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-5">
        <h1>Course List</h1>

        <ul class="list-group">
            @foreach($courses as $course)
                <li class="list-group-item">{{ $course->title }} - {{ $course->description }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eYfszP+RY5L2Lbgo6vZPshD8HxEeGm2x2qDl5fkgdS+3m2sL3OfnLXG++3Nq+54" crossorigin="anonymous"></script>
</body>
@endsection
