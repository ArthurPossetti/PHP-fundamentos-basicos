<?php
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];


    require_once('configuracao.php');

    $sql = 'insert into fabricantes (nome, cnpj) values (:nome, :cnpj)';

    $comando = $conexao->prepare($sql);

    $comando->bindParam(':nome', $nome);
    $comando->bindParam(':cnpj', $cnpj);


    $comando->execute();

    echo 'Fabricante inserido com sucesso!';
?>    
