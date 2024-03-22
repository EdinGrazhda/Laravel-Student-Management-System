<x-home-layout>
    <x-slot name="title">
        Show Enrollment
    </x-slot>
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h4>Enrollment Page</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Enroll No : {{ $enrollments->enroll_no }}
            </h5>
            <p class="card-text">
                Batch : {{ $enrollments->batch->name }}
            </p>
            <p class="card-text">
                Student : {{ $enrollments->student->name }}
            </p>
            <p class="card-text">
                Join Date : {{ $enrollments->join_date }}
            </p>
            <p class="card-text">
                Fee : {{ $enrollments->fee }}
            </p>
        </div>
    </div>
</div>
        </div>
    </div>
</x-home-layout>