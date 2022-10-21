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
                                         width="30">
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
        <div class="col-8">

            @if($comments!=null && sizeof($comments)>0)
                @foreach($comments as $key => $comment)

                    <div class="card mt-3">
                        <div class="row">
                            <div class="d-flex">

                                <a href="{{url('/viewProfile/'.\App\Models\Constants::getUserShareId($comment['phone']))}}">
                                    <img class="m-2" style="border-radius: 50px"
                                         src="{{$comment['picUrl']}}"
                                         width="40" height="40">
                                </a>
                                <div style="background-color: #e7e7e7;margin: 5px;padding:2px;border-radius: 5px">
                                    <a class="nav-link"
                                       href="{{url('/viewProfile/'.\App\Models\Constants::getUserShareId($comment['phone']))}}">

                                        <strong> {{$comment['commentByName']}}</strong>
                                        <small style="font-size: 10px;">
                                            @php
                                                $date = date("Y-m-d H:i:s",$comment['time']/1000);
                                                echo $date;

                                            @endphp</small>
                                    </a>

                                    {{$comment['comment']}}

                                </div>

                            </div>
                        </div>
                        <div class="row" style="margin-left: 100px">

                            @if(isset($comment['replies']))
                                {{sizeof($comment['replies'])}}Replies
                                @foreach($comment['replies'] as $replyKey=>$reply)
                                    <div class="row">
                                        <div class="d-flex">

                                            <a href="{{url('/viewProfile/'.\App\Models\Constants::getUserShareId($reply['phone']))}}">
                                                <img class="m-2" style="border-radius: 50px"
                                                     src="{{$reply['picUrl']}}"
                                                     width="40" height="40">
                                            </a>
                                            <div
                                                style="background-color: #e7e7e7;margin: 5px;padding:2px;border-radius: 5px">
                                                <a class="nav-link"
                                                   href="{{url('/viewProfile/'.\App\Models\Constants::getUserShareId($reply['phone']))}}">

                                                    <strong> {{$reply['commentByName']}}</strong> <small
                                                        style="font-size: 10px;">
                                                        @php
                                                            $date = date("Y-m-d H:i:s",$reply['time']/1000);
                                                            echo $date;

                                                        @endphp</small>
                                                </a>

                                                {{$reply['comment']}}

                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>

                @endforeach
            @endif
        </div>
    </div>

@stop
