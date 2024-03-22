<x-home-layout>
    <x-slot name="title">
        Create Payments
    </x-slot>  
    
    <div class="container mt-5 ml-5">
        <div class="row justify-content-center"> <!-- Center the content horizontally -->
            <div class="col-md-7"> <!-- Define the width of the content -->
                <div class="card">
                    @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <div class="card-header">
                        Payments Page
                    </div>
                    <div class="card-body">
                        <form action="{{ url('payments') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="Course">Enrollment</label>
                                <select class="form-control  " name="enrollment_id" id="">
                           
                                    @foreach($payments as $id=>$enrollno)
                                        <option value="{{ $id }}">{{ $enrollno }}</option>
                                    @endforeach
                                </select>
                                @error('enrollment_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="mobile">Paid Date</label>
                                <input type="text" name="paid_date" class="form-control" id="mobile" placeholder="Paid Date">
                                @error('paid_date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="mobile">Amount</label>
                                <input type="text" name="amount" class="form-control" id="mobile" placeholder="Amount">
                                @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-success mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>    