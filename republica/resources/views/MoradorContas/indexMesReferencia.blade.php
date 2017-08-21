@extends('principal')

@section('conteudo')

<h1>Contas Associadas ao Morador</h1>

<p>Mês de referência: {{$mesReferencia}}</p>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Código</th>
      <th>Tipo</th>
      <th>Valor R$</th>
      <th>Id Conta</th>
      <th>Id Morador</th>
    </tr>
  </thead>
  <tbody>
@foreach($MoradorContas as $m_c)
  <tr>
    <td>{{ $m_c->id }}</td>
    <td>{{ $m_c->tipoConta }}</td>
    <td>{{ $m_c->valor }}</td>
    <td>{{ $m_c->conta_id }}</td>
    <td>{{ $m_c->morador_id}}</td>
  </tr>
@endforeach
</tbody>
</table>
Valor total:   {{$t}}



@endsection
