<x-home-layout>
    <x-slot name="title">
        Show Course
    </x-slot>
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> 
            <div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h4>Course Page</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Name : {{ $courses->name }}
            </h5>
            <p class="card-text">
                Syllabus : {{ $courses->syllabus }}
            </p>
            <p class="card-text">
                Duration : {{ $courses->duration() }}
            </p>
        </div>
    </div>
</div>
        </div>
    </div>
</x-home-layout>