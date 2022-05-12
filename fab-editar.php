<?php
    $id_fab = $_POST['id_fab'];
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];

    require_once('configuracao.php');

    $sql = 'update fabricantes set nome = :nome, cnpj = :cnpj where id_fab = :id_fab';
    $comando = $conexao->prepare($sql);

    $comando->bindParam(':id_fab', $id_fab);
    $comando->bindParam(':nome', $nome);
    $comando->bindParam(':cnpj', $cnpj);

    $comando->execute();

    echo 'Fabricante editado com sucesso!';
?>    
