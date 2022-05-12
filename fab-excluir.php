<?php
    $id_fab = $_POST['id_fab'];

    require_once('configuracao.php');

    $sql = 'delete from fabricantes where id_fab = :id_fab';

    $comando = $conexao->prepare($sql);

    $comando->bindParam(':id_fab', $id_fab);

    $comando->execute();

    echo 'Fabricante excluído com sucesso!';
?>  