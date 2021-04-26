@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>create role vista dash bla</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.roles.store']) !!}
                @include('admin.roles.partials.form')
                    {!! Form::submit('crear role', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

{{-- div.form-group~p.f-w-bold>rol<~@foreachj(as a)~dilabel.mr-2~form::checkbox(tags[],tag->id,null --}}

