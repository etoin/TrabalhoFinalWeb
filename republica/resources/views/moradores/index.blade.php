@extends('principal')

@section('conteudo')

<h1>Produtos</h1>
<a class="btn btn-primary" href="/moradors/create">Adicionar Morador</a>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Apelido</th>
      <th>Email</th>
      <th>Contas</th>
    </tr>
  </thead>
  <tbody>
@foreach($moradors as $m)
<tr>
  <td>{{ $m->id }}</td>
  <td>{{ $m->nome }}</td>
  <td>{{ $m->apelido }}</td>
  <td>{{ $m->email}}</td>
  <td><a href="/moradors/{{ $m->id }}/MoradorContas">Acessar Contas</a></td>
</tr>
@endforeach
</tbody>
</table>

@endsection
