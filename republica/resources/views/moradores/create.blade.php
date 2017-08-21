@extends('principal')

@section('conteudo')

<h1>Novo morador</h1>

<form method="post" action="/moradors">

  {{ csrf_field() }}
  <div class="form-group">
  	<label>Nome: </label>
  	<input class="form-control" type="text" name="nome" maxlength="100"><br>
  </div>
  <div class="form-group">
  	<label>Apelido: </label>
  	<input class="form-control" type="text" name="apelido" maxlength="100"><br>
  </div>
  <div class="form-group">
  	<label>Cidade de Origem:</label>
  	<input class="form-control" type="text" name="cidade" maxlength="100"><br>
  </div>
  <div class="form-group">
  	<label>E-mail:</label>
  	<input class="form-control" type="text" name="email" maxlength="100"><br>
  </div>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">
<a href="/moradores" class="btn btn-primary">Voltar</a>

</form>


@endsection
