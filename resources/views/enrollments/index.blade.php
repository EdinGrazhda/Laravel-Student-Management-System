<x-home-layout>

    <x-slot name="title">
      Enrollment Application
    </x-slot>

    

    <div class="container" id="table">
        <div class="row">
            <div class="col-md-9 mt-5 ml-5" >
                <div class="card">
                    <div class="card-header">
                        <h4>Enrollments <a href="{{url('enrollments/create')}}" class="btn btn-primary">Add New</a></h4>
                    </div>
                    <div class="card-body">
                       

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Enroll No</th>
                                    <th>Batch</th>
                                    <th>Student</th>
                                    <th>Join Date</th>
                                    <th>Fee</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enrollments as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->enroll_no }}</td>
                                        <td>{{ $item->batch->name }} </td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->join_date }}</td>
                                        <td>{{ $item->fee }}</td>
                                        <td>
                                            <button class="btn btn-info"><a class="text-decoration-none text-light " href="{{ url('enrollments/'.$item->id) }}">View</a></button>
                                           <button class="btn btn-success"><a class="text-decoration-none text-light" href="{{url('enrollments/'.$item->id.'/edit')}}">Edit</a></button> 
                                           <button class="btn btn-danger"><a class="text-decoration-none text-light" onclick="return confirm('Are you sure ?')" href="{{url('enrollments/'.$item->id.'/delete')}}">Delete</a></button> 
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