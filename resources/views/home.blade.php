


    @extends('layouts.master')
    @extends('layouts.navbar')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['url' => 'home/store','class'=>'form-horizontal']) !!}

            <div class="form-group">
                {{Form::label('Post Name', 'Enter Post Name', ['class' => 'col-sm-2 control-label'])}}

                <div class="col-sm-10">
                    {{Form::text('name', '',['class'=>'form-control'])}}

                </div>
            </div>
            <div class="form-group">
                {{Form::label('Post', 'Enter Post', ['class' => 'col-sm-2 control-label'])}}

                <div class="col-sm-10">
                    {{Form::text('post', '',['class'=>'form-control'])}}

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>


{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
