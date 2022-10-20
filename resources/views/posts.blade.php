<html>
<header>
    <title>Noor-e-Nikah</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</header>
<body>
<div class="main bg-light">
    @foreach($posts as $key => $post)
        <div class="row">
            <div class="d-flex justify-content-center">
                @if(isset($post['userName']))
                    <div class="card w-25 m-3">
                        <div class="row ">
                            <div class="d-flex">
                                <img class="m-2" style="border-radius: 50px"
                                     src="{{$post['userPicUrl']}}"
                                     width="30">

                                <h6 class="m-2"> {{$post['userName']}}</h6>

                            </div>
                        </div>
                        <div class="row">
                            @if($post['type']=='image')
                                <div > {{$post['text']}}
                                </div>
                                <img
                                    src="{{$post['imageUrl']}}"
                                    width="200" height="400">
                            @elseif($post['type']=='text')
                                <div class="p-2"> {{$post['text']}}
                                </div>
                            @endif

                        </div>
                        <hr>
                        <div class="row">
                            <div class="ml-2 d-flex justify-content-between">
                                <div>{{$post['likeCount']}} likes</div>
                                <div>{{$post['commentCount']}} comments</div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endforeach

</div>


</body>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>--}}

</html>
