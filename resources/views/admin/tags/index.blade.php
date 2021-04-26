@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.tags.create')
        <a class="btn btn-secondary btn-sm float-right px-2"  href="{{route('admin.tags.create')}}">Nueva etiqueta</a>
    @endcan
    <h1>Listado de etiqueta</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td width="10px">
                        @can('admin.tags.edit')
                            <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                        @endcan
                    </td>
                    <td width="10px">
                        @can('admin.tags.destroy')
                            <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                            </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}

{{-- .card y table class table y table-striped y thead.tr.th*3 
  (1ID,2A,NAME,3colspoan2) y tbody.@foreach.($tags as $tag).tr^td{{$tag->id}}-td{{$tag->name}}-td.<a class="btn btn-primary btn-sm" 
href="{{route('a.t.edit',$tag)}}">editar<>-form action="{{route('a.t.s',$tag)}}" method="POST">-@csrf-@method('delete')-buttom 
class="btn btn-danger btn=sm" type="submit">Eliminar<  ***nota pa que amvos este a la derecha en td widtn="10px" --}}