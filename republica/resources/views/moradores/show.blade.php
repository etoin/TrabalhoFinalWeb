@extends('principal')

@section('conteudo')

<h1>Expulsar morador</h1>
<a href="/moradors">Voltar</a>

<p>Nome: {{ $morador->nome }}</p>
<p>Preço R$: {{ $morador->apelido }}</p>


<form method="post" action="/moradors/{{ $morador->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" value="Confirmar expulsão">

</form>




@endsection
