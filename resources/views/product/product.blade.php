<h1>Produtos</h1>
@foreach ($products as $product)
    <a href="{{ route('product.see', $slug = $product['id']) }}">
        <button>{{ $product['nome'] }}</button>
    </a>
@endforeach