<?php
    $servidor = 'localhost';
    $porta = '3306';
    $bancodedados = 'sexto_trabalho';
    $codificacao = 'utf8';
    $url = "mysql:host=$servidor;port=$porta;dbname=$bancodedados;charset=$codificacao";

    $usuario = 'root';
    $senha = 'dale';

    $conexao = new PDO($url, $usuario, $senha);
?>