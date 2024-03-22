<x-home-layout>
    <x-slot name="title">
        Show Payment
    </x-slot>
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h4>Payments Page</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Enrollment : {{ $payments->enrollment->enroll_no}}
            </h5>
            <p class="card-text">
                Paid Date : {{ $payments->paid_date }}
            </p>
            <p class="card-text">
                Amount : {{ $payments->amount }}
            </p>
        </div>
    </div>
</div>
        </div>
    </div>
</x-home-layout>