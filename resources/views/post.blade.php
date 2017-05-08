@extends('layouts.master')
@extends('layouts.navbar')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>This is first post {{$name ==null ? 'you':$name}}</h1>
        </div>
    </div>

@endsection