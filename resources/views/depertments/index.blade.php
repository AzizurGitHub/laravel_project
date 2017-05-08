@extends('layouts.master')

@section('content')
    <h1 class="mytext">hello laravel</h1>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CODE</th>
                    <th>CREATED_AT</th>
                    <th>UPDATED_AT</th>
                </tr>
                </thead>

                <tbody>
                @foreach($departments as $department)
                <tr>
                    <td>{{$department->id}}</td>
                    <td>{{$department->name}}</td>
                    <td>{{$department->code}}</td>
                    <td>{{$department->created_at->diffForHumans(\Carbon\Carbon::now())}}</td>
                    <td>{{$department->updated_at}}</td>

                </tr>
                @endforeach
                </tbody>

                </table>
            {{ $departments->links() }}
        </div>
    </div>
@endsection
