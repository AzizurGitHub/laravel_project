@extends('layouts.master')
@extends('layouts.navbar')

@section('content')

    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('storage/'.$post->image)}}" alt="" style="width:300px;height:200px;">
                <div class="caption">
                    <h3>{{$post->post_title}}</h3>
                    <p>{{$post->post}}</p>
                    <p>Created at: {{$post->created_at->diffForHumans(\Carbon\Carbon::now())}}</p>
                    <p>Updated at: {{$post->updated_at->toDaydateTimeString()}}</p>
                    <a href="{{url('postDelete'."/$post->id")}}">Delete</a>
                    <a href="{{$post->id}}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
        @endforeach


        {{--<div class="col-md-12">--}}
            {{--@foreach($posts as $post)--}}
            {{--<div class="col-md-4">--}}
                {{--<img src="{{asset('storage/'.$post->image)}}" style="width:300px;height:200px;"/>--}}
                {{--<p>Post Title: {{$post->post_title}}</p>--}}
                {{--<p>Post Description: {{$post->post}}</p>--}}
                {{--<p>Post Description: {{$post->created_at}}</p>--}}
                {{--<p>Post Description: {{$post->updated_at}}</p>--}}

            {{--</div>--}}
            {{--@endforeach--}}
            {{--<table class="table table-bordered">--}}
                {{--<tr>--}}
                    {{--<th>id</th>--}}
                    {{--<th>post title</th>--}}
                    {{--<th>post</th>--}}
                    {{--<th>image</th>--}}
                    {{--<th>create at</th>--}}
                    {{--<th>update at</th>--}}
                {{--<tr>--}}


                {{--@foreach($posts as $post)--}}
                    {{--<tr>--}}
                        {{--<td>{{$post->id}}</td>--}}
                        {{--<td>{{$post->post_title}}</td>--}}
                        {{--<td>{{$post->post}}</td>--}}
                        {{--<td><img src="{{asset('storage/'.$post->image)}}"/></td>--}}

                        {{--<td>{{$post->created_at}}</td>--}}
                        {{--<td>{{$post->updated_at}}</td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}

            {{--</table>--}}

        </div>
    </div>

@endsection