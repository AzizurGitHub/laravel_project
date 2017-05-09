@extends('layouts.master')
@extends('layouts.navbar')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>post title</th>
                    <th>post</th>
                    <th>image</th>
                    <th>create at</th>
                    <th>update at</th>
                <tr>


                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->post_title}}</td>
                        <td>{{$post->post}}</td>
                        <td><img src="{{asset('storage/'.$post->image)}}"/></td>

                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                    </tr>
                    @endforeach

            </table>

        </div>
    </div>

@endsection