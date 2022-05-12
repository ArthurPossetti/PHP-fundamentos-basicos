<?php
    $id_cate = $_POST['id_cate'];

    require_once('configuracao.php');

    $sql = 'delete from categorias where id_cate = :id_cate';

    $comando = $conexao->prepare($sql);

    $comando->bindParam(':id_cate', $id_cate);

    $comando->execute();

    echo 'Categoria excluída com sucesso!';
?>  