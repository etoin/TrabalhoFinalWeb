@extends('principal')

@section('conteudo')

<h1>Produtos</h1>
<a class="btn btn-primary" href="/contas/create">Adicionar conta</a>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Código</th>
      <th>Tipo</th>
      <th>Preço R$</th>
      <th>Mes Referência</th>
      <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
@foreach($contas as $c)
<tr>
  <td>{{ $c->id }}</td>
  <td>{{ $c->tipo }}</td>
  <td>{{ $c->valor }}</td>
  <td>{{ $c->mesReferencia}}</td>
  <td><a href="/contas/{{ $c->id }}"><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td>
</tr>
@endforeach
</tbody>
</table>

@endsection
