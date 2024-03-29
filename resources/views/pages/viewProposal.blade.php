@extends('layouts.default')
@section('content')
    <div class="card m-3 p-3">
        <h3>Viewing Proposal of {{$proposal->name}}</h3>
        <div class="row m-5">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1 col-4">
                        Name
                    </div>
                    <div class="border border-secondary p-1 col-8">
                        {{$proposal->name}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1  col-4">
                        Age
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$proposal->age}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1  col-4">
                        Gender
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$proposal->gender}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1  col-4">
                        City
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$proposal->city}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1  col-4">
                        Cast
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$proposal->cast}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1  col-4">
                        Religion
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$proposal->religion}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1  col-4">
                        Marital Status
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$proposal->marital_status}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1  col-4">
                        About
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        <pre>{{$proposal->about}}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card  m-3 p-3" style="background: #eeeeee">
        <h3>Profiles submitted for this {{$proposal->name}}</h3>
        <div class="row">
            @foreach($profiles as $profile)
                <div class="col-lg-3 col-6 m-2">
                    <div class="card p-3">
                        <span><strong>Name: </strong>{{$profile->name}}</span>
                        <span><strong>Phone: </strong>{{$profile->phone}}</span>
                        <span><strong>Age: </strong>{{$profile->age}}</span>
                        <span><strong>Gender: </strong>{{$profile->gender}}</span>
                        <span><strong>City: </strong>{{$profile->city}}</span>
                        <span><strong>Cast: </strong>{{$profile->cast}}</span>
                        <span><strong>Marital Status: </strong>{{$profile->marital_status}}</span>
                        <div class="d-flex justify-content-center">
                            <a href="{{url('/viewSubmittedProfile/'.$profile->id)}}">
                                <button class="btn btn-sm m-2 redBg">View</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="card  m-3 p-3" style="background: #ffebeb">
        <h3>Related Profiles for {{$proposal->name}}</h3>
        <div class="row">
            @foreach($relatedProfiles as $profile)
                <div class="col-lg-3 col-6 m-2">
                    <div class="card p-3">
                        <span><strong>Name: </strong>{{$profile->name}}</span>
                        <span><strong>Phone: </strong>{{$profile->phone}}</span>
                        <span><strong>Age: </strong>{{$profile->age}}</span>
                        <span><strong>Gender: </strong>{{$profile->gender}}</span>
                        <span><strong>City: </strong>{{$profile->city}}</span>
                        <span><strong>Cast: </strong>{{$profile->cast}}</span>
                        <span><strong>Marital Status: </strong>{{$profile->marital_status}}</span>
                        <div class="d-flex justify-content-center">
                            <a href="{{url('/viewSubmittedProfile/'.$profile->id)}}">
                                <button class="btn btn-sm m-2 redBg">View</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop
