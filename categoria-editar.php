<?php
    $id_cate = $_POST['id_cate'];
    $nome = $_POST['nome'];

    require_once('configuracao.php');

    $sql = 'update categorias set nome = :nome where id_cate = :id_cate';
    $comando = $conexao->prepare($sql);

    $comando->bindParam(':id_cate', $id_cate);
    $comando->bindParam(':nome', $nome);

    $comando->execute();

    echo 'Categoria editada com sucesso!';
?>    
