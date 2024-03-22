<x-slot name="title">
    Home
</x-slot>
<div class="container">
<div class="row">
<div class="col-md-3">
    <!-- The sidebar -->
    <div class="sidebar">
        <a class="active" href="#home">Home</a>
        <a href="{{ url('students') }}">Student</a>
        <a href="{{ url('teachers') }}">Teacher</a>
        <a href="{{ url('courses') }}">Courses</a>
        <a href="{{ url('batches') }}">Batches</a>
        <a href="{{ url('enrollments') }}">Enrollment</a>
        <a href="{{ url('payments') }}">Payment</a>
    </div>

<!-- Page content -->
    <div class="col-md-9">
        <div class="container">
            <x-partials.content/>
        </div>
            
       
    </div>
</div>
</div>
</div>