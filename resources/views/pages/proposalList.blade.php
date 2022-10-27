@extends('layouts.default')
@section('content')

    <div class="card mt-4">
        <h3>List of proposals</h3>
        <div class="table-responsive m-3">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">City</th>
                    <th scope="col">Cast</th>
                    <th scope="col">Education</th>
                    <th scope="col">Marital Status</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>

                @foreach($proposals as $proposal)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$proposal->name}}</td>
                        <td>{{$proposal->age}}</td>
                        <td>{{$proposal->phone}}</td>
                        <td>{{$proposal->gender}}</td>
                        <td>{{$proposal->city}}</td>
                        <td>{{$proposal->cast}}</td>
                        <td>{{$proposal->education}}</td>
                        <td>{{$proposal->marital_status}}</td>
                        <td>{{$proposal->created_at}}</td>

                        <td>
                            <a href="viewProposal/{{$proposal->id}}">
                                <button class="btn btn-sm btn-primary">View</button>
                            </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
