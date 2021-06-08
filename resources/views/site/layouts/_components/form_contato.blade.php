{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class="{{ $borda }}">
    <br>
    <input type="text" name="telefone" placeholder="Telefone" class="{{ $borda }}">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="{{ $borda }}">
    <br>
    <select name="motivo_contato" class="{{ $borda }}">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $borda }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $borda }}">ENVIAR</button>
</form>