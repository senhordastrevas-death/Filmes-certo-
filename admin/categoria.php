<link rel="stylesheet" href="style.css">
<ul>
    <li><a href="categoria.html">Categoria</a></li>
    <li><a href="filmes.html">Filmes</a></li>
</ul>
<main id="categoria">
    <form>
        <h2>Categoria</h2>
        <input type="text" name="categoria" placeholder="Nome Categoria...">
        <button name="salvar">Salvar</button>
    </form>
</main>

<?php
    echo $_GET['categoria'];
?>