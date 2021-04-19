  
            {!! Form::open(['route'=>'admin.tags.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre:') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'ingrese el nombre de la etiqueta...']) !!}
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'slug:') !!}
                {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'ingrese el nombre del slug...','readonly ']) !!}
                @error('slug')
                    <small class="text-danger">{{$message}}</small>
                @enderror  
            </div>
            <div class="form-group">
                {!! Form::label('color', 'color:') !!}
                {!! Form::select('color', $colors, null, ['class'=> 'form-control']) !!}
                {{-- <label for="">color</label>
                <select name="color" id="" class="form-control">
                    <option value="yellow">amarillo</option>
                    <option value="blue">azul</option>
                    <option value="red">rojo</option>
                </select> --}}
                @error('color')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>