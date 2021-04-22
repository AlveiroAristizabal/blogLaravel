<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'ingresa el nombre del post']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'ingresa el slug','readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'categories:') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">etiquetas</p>
    @foreach ($tags as $tag)
    <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{$tag->name}}
    </label>
    @endforeach
    @error('tags')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label >
        {!! Form::radio('status', 1, true) !!}
        borrador
    </label>
    <label >
        {!! Form::radio('status', 2) !!}
        publicado
    </label>
    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="row">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->imagen)
            <img id="picture" src="{{Storage::url($post->imagen->url)}}" alt="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2020/08/09/15/44/tower-5475850__340.jpg" alt="">
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class'=>'form-control-file', 'accept'=>'image/*']) !!}
            @error('file')
                 <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores vel molestias iure nisi sapiente aut libero. Eveniet, officiis. Voluptas, praesentium dolor! Sed in repudiandae voluptatum eius culpa ratione deleniti corporis?</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'extracto:') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}
    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>