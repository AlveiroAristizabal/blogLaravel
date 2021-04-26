<div class="form-group">
    {!! Form::label('role','Role:') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'ponga el rol']) !!}
    @error('name')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror
</div>
{{-- <div class="form-group"> --}}
    <h2 class="h3">Lista de Permisos</h2>
    {{-- <p      class="font-weight-bold">Listado de permisos</p> --}}
    @foreach ($permissions as $permission)
    <div>
        <label class='mr-2'  >
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!}
            {{$permission->description}}
        </label>
    </div>
    @endforeach