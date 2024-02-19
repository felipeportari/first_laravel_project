<h1>Blog</h1>
@foreach ($artigos as $artigo)
    <a href="{{ route('site.blog.see', $slug = $artigo['id']) }}">
        <button>{{ $artigo['nome'] }}</button>
    </a>
@endforeach

{{-- <a href="{{ route('site.blog.see', $slug = '2') }}">
    <button>Artigo 2</button>
</a>

<a href="{{ route('site.blog.see', $slug = '3') }}">
    <button>Artigo 3</button>
</a> --}}
