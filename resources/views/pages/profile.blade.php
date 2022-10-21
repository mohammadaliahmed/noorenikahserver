@extends('layouts.default')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card m-5  p-3 w-50">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <img src="{{$user['livePicPath']}}" width="200" height="200" class="rounded-circle">
                </div>
            </div>
            <div class="m-5">
                <div class="row " style=" background-color: #efefef">
                    <div class="col-5 border">Name</div>
                    <div class="col-7 border">{{$user['name']}}</div>
                </div>
                <div class="row " style=" background-color: #efefef">
                    <div class="col-5 border">Gender</div>
                    <div class="col-7 border">{{$user['gender']}}</div>
                </div>
                <div class="row " style=" background-color: #efefef">
                    <div class="col-5 border">City</div>
                    <div class="col-7 border">{{$user['city']}}</div>
                </div>
                <div class="row " style=" background-color: #efefef">
                    <div class="col-5 border">Education</div>
                    <div class="col-7 border">{{$user['education']}}</div>
                </div>
                <div class="row " style=" background-color: #efefef">
                    <div class="col-5 border">Job Or Business</div>
                    <div class="col-7 border">{{$user['jobOrBusiness']}}</div>
                </div>
                <div class="row " style=" background-color: #efefef">
                    <div class="col-5 border">Religion</div>
                    <div class="col-7 border">{{$user['religion']}}</div>
                </div>
            </div>
        </div>
    </div>

@stop
