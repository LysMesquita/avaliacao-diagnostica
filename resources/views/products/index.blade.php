@extends('layouts.app')

@section('title','Produtos')

@section('content')
<h1>Lista de Produtos</h1>

<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Imagem</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço (R$)</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @forelse($products as $p)
      <tr>
        <td>{{ $p->id }}</td>
        <td>
          @if($p->image_url)
            <img src="{{ $p->image_url }}" alt="img" class="thumb">
          @else
            <img src="{{ asset('images/no-image.png') }}" alt="Sem imagem" class="thumb">
          @endif
        </td>
        <td>{{ $p->name }}</td>
        <td>{{ Str::limit($p->description, 80) }}</td>
        <td>{{ number_format($p->price,2,',','.') }}</td>
        <td>
          <a href="{{ route('products.show',$p) }}">Ver</a>
          <form action="{{ route('products.destroy',$p) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit">Remover</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="6">Nenhum produto cadastrado.</td></tr>
    @endforelse
  </tbody>
</table>

<div class="pagination">
  {{ $products->links() }}
</div>
@endsection
