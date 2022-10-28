@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-center">

            <script async
                    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8337731531668373"
                    crossorigin="anonymous"></script>
            <!-- webbanner -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-8337731531668373"
                 data-ad-slot="9033264443"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @if($posts!=null && sizeof($posts)>0)
                @foreach($posts as $key => $post)

                    @if(isset($post['userName']))
                        <div class="col-lg-4 col-12">
                            <div class="card m-3">

                                <div class="row">
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
                                        <div class="p-4">

                                    <pre>
                                        {!! $post['text']!!}
                                        </pre>
                                        </div>
                                        <img
                                            src="{{$post['imageUrl']}}"
                                            width="200" height="400">
                                    @elseif($post['type']=='text')
                                        <div class="p-4">
                                            <pre> {!! $post['text']!!}</pre>
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
                        </div>

                    @endif

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
        </div>
    </div>
@stop
