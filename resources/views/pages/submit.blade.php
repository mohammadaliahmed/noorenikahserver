@extends('layouts.default')
@section('content')

    <form class="m-5 card p-5" method="post">
        <h3>Submit your profile</h3>
        @csrf
        <div class="row m-3">

            <div class="d-flex justify-content-center">
                <div>
                    <img src="{{url('/images/picked.png')}}" width=150><br>
                    Upload your  picture
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-6">
                <label>Enter name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-lg-6 col-6">
                <label>Enter Phone</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-6">
                <label>Enter Age</label>
                <input type="text" class="form-control" name="age">
            </div>
            <div class="col-lg-4 col-6">
                <label>Select Gender</label>
                <br>
                <div class="d-flex justify-content-start">
                    <label>
                        <input class="m-3" type="radio" value="male" name="gender">Male</label>
                    <label>
                        <input class="m-3" type="radio" value="female" name="gender">Female</label>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <label>Select Marital Status</label>
                <br>
                <select name="marital_status" class="form-control">
                    <option value="Single">Single</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Khula">Khula</option>
                </select>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-6">
                <label>Enter City</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="col-lg-4 col-6">
                <label>Enter Cast</label>
                <input type="text" class="form-control" name="cast">
            </div>
            <div class="col-lg-4 col-6">
                <label>Enter Religion</label>
                <input type="text" class="form-control" name="religion">
            </div>

        </div>

        <div class="row mt-5">
            <div class="d-flex justify-content-center">
                <button class="btn redBg w-25" type="submit">
                    Submit
                </button>
            </div>
        </div>

    </form>
@stop
