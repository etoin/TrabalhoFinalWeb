@extends('principal')

@section('conteudo')

<h1>Contas Associadas ao Morador</h1>
<p class="col-md-3">Informe mês referência para acessar contas mais detalhadas: </p>
<form action="/moradors/{{$MoradorContas[0]->morador_id}}/MoradorContas/mesRef" method="post" >

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <input id='mesReferencia' type="text" name="mesReferencia" class="col-md-4">
  <div class="col-md-1"> </div>

  <input type="submit" name="go" value="Acessar" class="btn btn-primary">

</form>



<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Código</th>
      <th>Tipo</th>
      <th>Valor R$</th>
      <th>Mês referência</th>
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
    <td>{{ $m_c->conta->mesReferencia }}</td>
    <td>{{ $m_c->conta_id }}</td>
    <td>{{ $m_c->morador_id}}</td>
  </tr>
@endforeach
</tbody>
</table>
Valor total:   {{$t}}

@endsection
