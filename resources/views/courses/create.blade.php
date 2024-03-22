<x-home-layout>
    <x-slot name="title">
        Create Course
    </x-slot>  
    
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-7"> <!-- Define the width of the content -->
                <div class="card">
                    @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <div class="card-header">
                        Course Page
                    </div>
                    <div class="card-body">
                        <form action="{{ url('courses') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Syllabus</label>
                                <input type="text" name="syllabus" class="form-control" id="syllabus" placeholder="Syllabus">
                                @error('syllabus') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="mobile">Duration</label>
                                <input type="text" name="duration" class="form-control" id="duration" placeholder="Duration">
                                @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-success mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>    