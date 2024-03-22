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
                <form action="{{ url('batches/'.$batches->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control"  id="name" value="{{ $batches->name }}" placeholder="Name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Course">Course</label>
                        <input type="text" name="course_id" class="form-control"  id="course"value={{ $batches->course_id }} placeholder="Course">
                        @error('course_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Start Date">Start Date</label>
                        <input type="text" name="start_date" class="form-control" id="startdate" value={{ $batches->start_date }} placeholder="Start Date">
                        @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
    

</x-home-layout>