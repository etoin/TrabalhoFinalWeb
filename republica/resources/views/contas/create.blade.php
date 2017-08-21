@extends('principal')

@section('conteudo')

<h1>Inserir conta</h1>
<a href="/contas">Voltar</a>

<form method="post" action="/contas">

  {{ csrf_field() }}

  Tipo: <select name="tipo">
  		<option value="Aluguel">Aluguel</option>
  		<option value="Energia">Energia</option>
  		<option value="Agua">Agua</option>
  		<option value="Telefone">Telefone</option>
  		<option value="Internet">Internet</option>
  </select><br>
  Valor: <input type="text" name="valor"> <br>
  Mes Referência: <input type="text" name="mesReferencia"> <br>

  <input type="submit" name="botaoSalvar" value="Salvar">

</form>

@endsection
