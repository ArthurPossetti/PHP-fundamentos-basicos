<?php 

    require_once('configuracao.php');

    $sql = <<<EOD
        select
            id_fab,
            nome,
            cnpj
        from
            fabricantes
        order by
            nome
    EOD;

    $comando = $conexao->prepare($sql);

    $comando->execute();

    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    print_r($resultado);

?>