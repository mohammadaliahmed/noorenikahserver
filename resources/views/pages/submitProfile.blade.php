@extends('layouts.default')
@section('content')

    <div class="card m-3 p-3">
        <h3>Viewing Proposal of {{$proposal->name}}</h3>
        <div class="row m-5">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Name
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$proposal->name}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Age
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$proposal->age}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Gender
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$proposal->gender}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        City
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$proposal->city}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Cast
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$proposal->cast}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Religion
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$proposal->religion}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        Marital Status
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        {{$proposal->marital_status}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="border border-secondary p-1" style="width: 150px">
                        About
                    </div>
                    <div class="border border-secondary p-1" style="width: 500px">
                        <pre>{{$proposal->about}}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="m-3 card p-3">
        <form method="post">
            <h3>Submit your profile</h3>
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
                    <label>Education</label>
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
                    <select name="marital_status" class="form-control">
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
                <label>About yourself</label>

                <textarea name="about" placeholder="About yourself" class="col-12 form-control">

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
    </div>
@stop
