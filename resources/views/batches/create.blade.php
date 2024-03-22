<x-home-layout>
    <x-slot name="title">
        Create Batch
    </x-slot>  
    
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-7"> <!-- Define the width of the content -->
                <div class="card">
                    @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <div class="card-header">
                        Batch Page
                    </div>
                    <div class="card-body">
                        <form action="{{ url('batches') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Course">Course</label>
                                <select class="form-control  " name="course_id" id="">
                           
                                    @foreach($courses as $id=>$name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('course_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="mobile">Start Date</label>
                                <input type="text" name="start_date" class="form-control" id="Start Date" placeholder="Start Date">
                                @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-success mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>    