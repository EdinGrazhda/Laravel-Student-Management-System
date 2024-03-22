<x-home-layout>
    <x-slot name="title">
        Create Students
    </x-slot>  
    
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-7"> <!-- Define the width of the content -->
                <div class="card">
                    @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <div class="card-header">
                        Students Page
                    </div>
                    <div class="card-body">
                        <form action="{{ url('students') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile">
                                @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-success mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>    