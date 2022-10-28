@extends('layouts.default')
@section('content')
    <div class="row">
        @foreach($proposals as $proposal)
            <div class="col-lg-4 col-12">
                <div class="card m-3 p-3">
                    <div class="d-flex justify-content-center">
                        <div class="border border-secondary p-1" style="width: 150px">
                            Name
                        </div>
                        <div class="border border-secondary p-1" style="width: 500px">
                            {{$proposal->name}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="border border-secondary p-1" style="width: 150px">
                            Age
                        </div>
                        <div class="border border-secondary p-1" style="width: 500px">
                            {{$proposal->age}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="border border-secondary p-1" style="width: 150px">
                            Gender
                        </div>
                        <div class="border border-secondary p-1" style="width: 500px">
                            {{$proposal->gender}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="border border-secondary p-1" style="width: 150px">
                            City
                        </div>
                        <div class="border border-secondary p-1" style="width: 500px">
                            {{$proposal->city}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="border border-secondary p-1" style="width: 150px">
                            Cast
                        </div>
                        <div class="border border-secondary p-1" style="width: 500px">
                            {{$proposal->cast}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="border border-secondary p-1" style="width: 150px">
                            Religion
                        </div>
                        <div class="border border-secondary p-1" style="width: 500px">
                            {{$proposal->religion}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="border border-secondary p-1" style="width: 150px">
                            Marital Status
                        </div>
                        <div class="border border-secondary p-1" style="width: 500px">
                            {{$proposal->marital_status}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="border border-secondary p-1" style="width: 150px">
                            About
                        </div>
                        <div class="border border-secondary p-1" style="width: 500px">
                           {{$proposal->about}}
                        </div>
                    </div>
                    <a href="submitProfile/{{$proposal->id}}"><button class="btn btn-sm w-100 mt-3 redBg">Submit profile</button> </a>
                </div>
            </div>

        @endforeach
    </div>

@stop
