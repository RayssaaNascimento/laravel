@foreach ($produtos as $produto)
    <a href="{{ route('deletar', ["id"=>$produto->id]) }}">{{ $produto->nome }}</a>
    <br>
@endforeach

<h1>{{ $produto->nome }}</h1>
<img src="{{ $produto->foto }}" alt="{{ $produto->alt }}">