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
                    <div class="border border-secondary p-1   col-4">
                        Name
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$profile->name}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1   col-4">
                        Age
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$profile->age}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1   col-4">
                        Gender
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$profile->gender}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1   col-4">
                        City
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$profile->city}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1   col-4">
                        Cast
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$profile->cast}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1   col-4">
                        Religion
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$profile->religion}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1   col-4">
                        Marital Status
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        {{$profile->marital_status}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1   col-4">
                        About
                    </div>
                    <div class="border border-secondary p-1   col-8">
                        <pre>{{$profile->about}}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
