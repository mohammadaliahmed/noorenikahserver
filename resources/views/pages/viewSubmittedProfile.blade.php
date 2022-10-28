@extends('layouts.default')
@section('content')
    <div class="card m-3 p-3">
        <div class="d-flex justify-content-between">
            <h3>Viewing {{$profile->name}}</h3>
            <div class="d-flex justify-content-center">
                <a class="m-3" href="tel:{{$profile->phone}}"><i class="bi bi-telephone-outbound-fill"></i></a>
                <a class="m-3" href="https://wa.me/{{$profile->phone}}"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
        <div class="row m-5">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Name
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$profile->name}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Age
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$profile->age}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Gender
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$profile->gender}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        City
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$profile->city}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Cast
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$profile->cast}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Religion
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$profile->religion}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Marital Status
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$profile->marital_status}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        About
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        <pre>{{$profile->about}}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
