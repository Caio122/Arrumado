<h3>Produtos</h3>
<a href="{{ route('produtos.create') }}">Novo</a>
<br><br>
@if(count($produto)>0)
    <table>
    @foreach ($produto as $produtos)
    <tr>
        <th scope="row">{{ $produtos->id }}</th>
        <td> {{ $produtos->nome }}</td>
        <td> {{ $produtos->quantidade }}</td>
        <td> {{ $produtos->valor }}</td>
        <td>
        {{ $produtos->id }} | {{ $produtos->nome }}
        <a href="{{ route('produtos.show', $produtos->id) }}">Detalhes</a>
        <a href="{{ route('produtos.edit', $produtos->id) }}">Alterar</a>
        <a href="{{ route('produtos.delete', $produtos->id) }}">Deletar</a>
        </td>
    </tr>

    @endforeach
    </table>
@else
    <h3>Não existem produtos cadastrados</h3>
@endif
