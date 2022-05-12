<?php
    $nome = $_POST['nome'];

    require_once('configuracao.php');

    $sql = 'insert into categorias (nome) values (:nome)';

    $comando = $conexao->prepare($sql);

    $comando->bindParam(':nome', $nome);

    $comando->execute();

    echo 'Categoria inserida com sucesso!';
?>    
