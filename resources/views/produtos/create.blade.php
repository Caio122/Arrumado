<h3>Novo produto</h3>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="nome">
    <input type="number" name="quantidade" placeholder="quantidade">
    <input type="number" name="valor" placeholder="valor">
    <input type="submit" value="Salvar">
</form>
