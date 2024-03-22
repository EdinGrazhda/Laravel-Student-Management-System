<x-home-layout>

    <x-slot name="title">
        Edit Batch
    </x-slot>

    <div class="container mt-5 ml-5">
        @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{ url('enrollments/'.$enrollments->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Enroll No</label>
                        <input type="text" name="enroll_no" class="form-control"  id="name" value="{{ $enrollments->enroll_no }}" placeholder="Name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Course">Batch</label>
                        <input type="text" name="batch_id" class="form-control"  id="course"value={{ $enrollments->batch_id }} placeholder="Course">
                        @error('course_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Start Date">Student</label>
                        <input type="text" name="student_id" class="form-control" id="startdate" value={{ $enrollments->student_id }} placeholder="Start Date">
                        @error('student_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Join Date">Join Date</label>
                        <input type="text" name="join_date" class="form-control" id="join_date" value={{ $enrollments->join_date }} placeholder="join_date">
                        @error('join_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Fee">Fee</label>
                        <input type="text" name="fee" class="form-control" id="fee" value={{ $enrollments->fee }} placeholder="Fee">
                        @error('fee') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
    

</x-home-layout>