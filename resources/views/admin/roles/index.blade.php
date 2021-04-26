@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.roles.create')}}">Nuevo Rol</a> 
    <h1>Lista de roles</h1>
@stop
@section('content')
@if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
<div class="card">
    <div class="cardpbody">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td width='10px'>
                            <a class="btn btn-primary" href="{{route('admin.roles.edit', $role)}}">editar</a>
                        </td>
                        <td width='10px'>
                            <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            {{-- {!! Form::submit('role', ['class'=>'btn btn-secondary']) !!} --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    {{-- <p>role Welcome to this beautiful admin panel de .</p> --}}
@stop

