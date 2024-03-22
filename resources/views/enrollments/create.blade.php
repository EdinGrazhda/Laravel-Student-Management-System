<x-home-layout>
    <x-slot name="title">
        Create Enrollment
    </x-slot>  
    
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-7"> <!-- Define the width of the content -->
                <div class="card">
                    @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <div class="card-header">
                        Enrollment Page
                    </div>
                    <div class="card-body">
                        <form action="{{ url('enrollments') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="Enroll No">Enroll No</label>
                                <input type="text" name="enroll_no" class="form-control" id="name" placeholder="Enroll No">
                                @error('enroll_no') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Course">Batch</label>
                                <select class="form-control  " name="batch_id" id="">
                                    @foreach($batches as $id=>$name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('enrollment_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Course">Student</label>
                                <select class="form-control  " name="student_id" id="">
                                    @foreach($students as $id=>$name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('student_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Join Date">Join Date</label>
                                <input type="text" name="join_date" class="form-control" id="join_date" placeholder="Join Date">
                                @error('join_date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Fee">Fee</label>
                                <input type="text" name="fee" class="form-control" id="fee" placeholder="Fee">
                                @error('fee') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-success mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>    