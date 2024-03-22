<x-home-layout>

    <x-slot name="title">
        Course Application
    </x-slot>

    

    <div class="container" id="table">
        <div class="row">
            <div class="col-md-9 mt-5 ml-5" >
                <div class="card">
                    <div class="card-header">
                        <h4>Categories <a href="{{url('courses/create')}}" class="btn btn-primary">Add New</a></h4>
                    </div>
                    <div class="card-body">
                       

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Syllabus</th>
                                    <th>Duration</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->syllabus }}</td>
                                        <td>{{ $item->duration() }}</td>
                                        <td>
                                            <button class="btn btn-info"><a class="text-decoration-none text-light " href="{{ url('courses/'.$item->id) }}">View</a></button>
                                           <button class="btn btn-success"><a class="text-decoration-none text-light" href="{{url('courses/'.$item->id.'/edit')}}">Edit</a></button> 
                                           <button class="btn btn-danger"><a class="text-decoration-none text-light" onclick="return confirm('Are you sure ?')" href="{{url('courses/'.$item->id.'/delete')}}">Delete</a></button> 
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