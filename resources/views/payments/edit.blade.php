<x-home-layout>

    <x-slot name="title">
        Edit Payments
    </x-slot>

    <div class="container mt-5 ml-5">
        @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{ url('payments/'.$payments->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
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
                        <label for="address">Paid Date</label>
                        <input type="text" name="paid_date" class="form-control"  id="address"value={{ $payments->paid_date }} placeholder="Address">
                        @error('paid_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="mobile">Amount</label>
                        <input type="text" name="amount" class="form-control" id="mobile" value={{ $payments->amount}} placeholder="Mobile">
                        @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
    

</x-home-layout>