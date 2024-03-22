<x-home-layout>

    <x-slot name="title">
        Edit Course
    </x-slot>

    <div class="container mt-5 ml-5">
        @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{ url('courses/'.$courses->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control"  id="name" value="{{ $courses->name }}" placeholder="Name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="syllabus">Syllabus</label>
                        <input type="text" name="syllabus" class="form-control"  id="syllabus"value={{ $courses->syllabus }} placeholder="Syllabus">
                        @error('syllabus') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" name="duration" class="form-control" id="duration" value={{ $courses->duration }} placeholder="duration">
                        @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
    

</x-home-layout>