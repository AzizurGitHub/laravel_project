@extends('layouts.master')
@extends('layouts.navbar')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>This is first contact {{$name ==null ? 'you':$name}}</h1>

        </div>

    </div>

@endsection