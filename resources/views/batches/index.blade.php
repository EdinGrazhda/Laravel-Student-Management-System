<x-home-layout>

    <x-slot name="title">
      Batch Application
    </x-slot>

    

    <div class="container" id="table">
        <div class="row">
            <div class="col-md-9 mt-5 ml-5" >
                <div class="card">
                    <div class="card-header">
                        <h4>Batches <a href="{{url('batches/create')}}" class="btn btn-primary">Add New</a></h4>
                    </div>
                    <div class="card-body">
                       

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Start Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($batches as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->course->name }} </td>
                                        <td>{{ $item->start_date }}</td>
                                        <td>
                                            <button class="btn btn-info"><a class="text-decoration-none text-light " href="{{ url('batches/'.$item->id) }}">View</a></button>
                                           <button class="btn btn-success"><a class="text-decoration-none text-light" href="{{url('batches/'.$item->id.'/edit')}}">Edit</a></button> 
                                           <button class="btn btn-danger"><a class="text-decoration-none text-light" onclick="return confirm('Are you sure ?')" href="{{url('batches/'.$item->id.'/delete')}}">Delete</a></button> 
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