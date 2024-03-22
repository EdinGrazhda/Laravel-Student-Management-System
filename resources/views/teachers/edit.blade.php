<x-home-layout>

    <x-slot name="title">
        Edit Teacher
    </x-slot>

    <div class="container mt-5 ml-5">
        @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{ url('teachers/'.$teachers->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control"  id="name" value="{{ $teachers->name }}" placeholder="Name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control"  id="address"value={{ $teachers->address }} placeholder="Address">
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" class="form-control" id="mobile" value={{ $teachers->mobile }} placeholder="Mobile">
                        @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
    

</x-home-layout>