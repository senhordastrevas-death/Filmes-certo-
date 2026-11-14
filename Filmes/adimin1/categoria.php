<?php
    include('conexao.php');
?>

<link rel="stylesheet" href="style.css">
<ul>
    <li><a href="categoria.html">Categoria</a></li>
    <li><a href="filmes.html">Filmes</a></li>
</ul>
<main id="categoria">
    <form method="get">
        <h2>Categoria</h2>
        <input type="text" name="categoria" placeholder="Nome Categoria...">
        <button name="salvar">Salvar</button>
    </form>
</main>

<?php

    if(isset($_GET['salvar'])){
        $nomeCategoria = $_GET['categoria'];

        $sql = "INSERT INTO categoria (nome) values ('$nomeCategoria')";

        if($conn->query($sql)){
            echo "Gravou com sucesso";
        }else{
            echo "Deu ruim";
        }
    }

    /*phpMyAdimin*/
    $sql = "selec * from categoria";
    $resultado = $conn->query($sql);

    while ($obj = $resultado->fetch_assoc()) {
        echo $obj['id']." - ".$obj['nome']."<a href='?editar=".$obj['id']."'>Editar</a><br>";
    }

    if(isset($_GET['editar'])){
        echo "entrou, lá ele";
    }

?>