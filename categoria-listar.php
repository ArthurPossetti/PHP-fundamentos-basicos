<?php 

    require_once('configuracao.php');

    $sql = <<<EOD
        select
            id_cate
            nome
        from
            categorias
        order by
            nome
    EOD;

    $comando = $conexao->prepare($sql);

    $comando->execute();

    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

    print_r($resultado);

?>