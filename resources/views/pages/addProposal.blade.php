@extends('layouts.default')
@section('content')

    <form class="m-2 card p-2" method="post">
        <h3>Add Proposal</h3>
        @csrf

        <div class="row m-3">
            <div class="col-lg-4 col-12">
                <label>Enter name</label>
                <input type="text" class="form-control" required name="name">
            </div>
            <div class="col-lg-4 col-12">
                <label>Enter Phone</label>
                <input type="text" class="form-control" required name="phone">
            </div>
            <div class="col-lg-4 col-12">
                <label>Enter Education</label>
                <input type="text" class="form-control" required name="education">
            </div>
        </div>
        <div class="row m-3">
            <div class="col-lg-4 col-12">
                <label>Enter Age</label>
                <input type="text" class="form-control" required name="age">
            </div>
            <div class="col-lg-4 col-12">
                <label>Select Gender</label>
                <br>
                <div class="d-flex justify-content-start">
                    <label>
                        <input class="m-3" type="radio" value="male" required name="gender">Male</label>
                    <label>
                        <input class="m-3" type="radio" value="female" required name="gender">Female</label>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <label>Select Marital Status</label>
                <br>
                <select  name="marital_status" class="form-control">
                    <option value="Single">Single</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Khula">Khula</option>
                </select>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-lg-4 col-12">
                <label>Enter City</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="col-lg-4 col-12">
                <label>Enter Cast</label>
                <input type="text" class="form-control" name="cast">
            </div>
            <div class="col-lg-4 col-12">
                <label>Enter Religion</label>
                <input type="text" class="form-control" name="religion">
            </div>

        </div>
        <div class="row m-3">
            <label>About</label>

            <textarea name="about" placeholder="About" class="col-12 form-control">

            </textarea>
        </div>

        <div class="row m-3">
            <div class="d-flex justify-content-center">
                <button class="btn redBg w-25" type="submit">
                    Submit
                </button>
            </div>
        </div>

    </form>
@stop
