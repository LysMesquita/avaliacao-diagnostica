@extends('layouts.app')

@section('title',$product->name)

@section('content')
<h1>{{ $product->name }}</h1>

<div class="product-detail">
  <div class="image">
    @if($product->image_url)
      <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
    @else
      <img src="{{ asset('images/no-image.png') }}" alt="Sem imagem">
    @endif
  </div>

  <div class="info">
    <p><strong>Preço:</strong> R$ {{ number_format($product->price,2,',','.') }}</p>
    <p><strong>Descrição:</strong><br>{{ $product->description }}</p>
    <a href="{{ route('products.index') }}">Voltar</a>
  </div>
</div>
@endsection
