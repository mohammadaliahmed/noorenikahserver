@extends('layouts.default')
@section('content')

    @if($posts!=null && sizeof($posts)>0)
        @foreach($posts as $key => $post)
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-4 col-12">
                        @if(isset($post['userName']))
                            <div class="card m-3" style="width: 400px;">
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
                                        <div class="p-2"><a class="nav-link"
                                                            href="{{url('/viewLikes/'.$post['id'])}}">
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
            </div>
        @endforeach
    @else
        <div class="d-flex h-100 align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="jumbotron flex-grow-0 flex-shrink-1" id="gateway">
                            <h1 class="text-center">No Posts</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

@stop
