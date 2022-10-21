@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-12">
            <div class="d-flex justify-content-center">
                @if(isset($post['userName']))
                    <div class="card m-3">
                        <div class="row ">
                            <div class="d-flex">
                                <a href="{{url('/viewProfile/'.\App\Models\Constants::getUserShareId($post['userId']))}}">
                                    <img class="m-2" style="border-radius: 50px"
                                         src="{{$post['userPicUrl']}}"
                                         width="40" height="40">
                                </a>
                                <a class="nav-link"
                                   href="{{url('/viewProfile/'.\App\Models\Constants::getUserShareId($post['userId']))}}">

                                    <h6 class="mt-2"> {{$post['userName']}}</h6>
                                </a>

                            </div>
                        </div>
                        <div class="row">
                            @if($post['type']=='image')
                                <div class="p-4"> {{$post['text']}}
                                </div>
                                <img
                                    src="{{$post['imageUrl']}}"
                                    width="200" height="400">
                            @elseif($post['type']=='text')
                                <div class="p-4"> {{$post['text']}}
                                </div>
                            @endif

                        </div>
                        <hr>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="p-2"><a class="nav-link" href="{{url('/viewLikes/'.$post['id'])}}">
                                        {{$post['likeCount']}} likes</a></div>
                                <div class="p-2"><a class="nav-link"
                                                    href="{{url('/viewComments/'.$post['id'])}}">{{$post['commentCount']}}
                                        comments</a></div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-lg-8 col-12">

            @if($likes!=null && sizeof($likes)>0)
                @foreach($likes as $key => $like)
                    @if(isset($like['picUrl']))
                        <div class="card m-3">
                            <div class="row ">
                                <div class="d-flex">
                                    <a href="{{url('/viewProfile/'.\App\Models\Constants::getUserShareId($like['phone']))}}">
                                        <img class="m-2" style="border-radius: 50px"
                                             src="{{$like['picUrl']}}"
                                             width="40" height="40">
                                    </a>
                                    <a class="nav-link"
                                       href="{{url('/viewProfile/'.\App\Models\Constants::getUserShareId($like['phone']))}}">

                                        <h6 class="mt-2"> {{$like['name']}}</h6>
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif

        </div>
    </div>

@stop
