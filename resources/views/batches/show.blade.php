<x-home-layout>
    <x-slot name="title">
        Show Batch
    </x-slot>
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h4>Batches Page</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Name : {{ $batches->name }}
            </h5>
            <p class="card-text">
                Course : {{ $batches->course_id }}
            </p>
            <p class="card-text">
                Start Date : {{ $batches->start_date }}
            </p>
        </div>
    </div>
</div>
        </div>
    </div>
</x-home-layout>