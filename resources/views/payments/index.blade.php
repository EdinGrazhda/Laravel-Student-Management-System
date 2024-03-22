<x-home-layout>

    <x-slot name="title">
        Payment Application
    </x-slot>

    

    <div class="container" id="table">
        <div class="row">
            <div class="col-md-9 mt-5 ml-5" >
                <div class="card">
                    <div class="card-header">
                        <h4>Payments <a href="{{url('payments/create')}}" class="btn btn-primary">Add New</a></h4>
                    </div>
                    <div class="card-body">
                       

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Enrollment</th>
                                    <th>Paid Date</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->enrollment->enroll_no }}</td>
                                        <td>{{ $item->paid_date }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>
                                           <button class="btn btn-info"><a class="text-decoration-none text-light " href="{{ url('payments/'.$item->id) }}">View</a></button>
                                           <button class="btn btn-success"><a class="text-decoration-none text-light" href="{{url('payments/'.$item->id.'/edit')}}">Edit</a></button> 
                                           <button class="btn btn-danger"><a class="text-decoration-none text-light" onclick="return confirm('Are you sure ?')" href="{{url('payments/'.$item->id.'/delete')}}">Delete</a></button> 
                                           <button class="btn btn-warning "><a class="text-decoration-none text-light" href="{{ url('report/report1/'.$item->id) }}">Payment PDF</a></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-home-layout>