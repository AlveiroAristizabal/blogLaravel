<x-app-layout>
    <div class="py-8 max-w-5xl mx-auto px-2 sm:px-6 lg:px-8">
        <h1 class="uppercase text-center fond-bold text-3xl">etiqueta:{{ $tag->name }}</h1>
        @foreach ($posts as $post)
        <x-card-post :post="$post"/>
        @endforeach
        <div class="mt-4 ">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>