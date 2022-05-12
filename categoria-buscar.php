<?php
    $id_cate = $_POST['id_cate'];
    require_once('configuracao.php');

    $sql = <<<EOD
        select
            id_cate
            nome
        from
            categorias
        where 
            id_cate = :id_cate
    EOD;

    $comando = $conexao -> prepare($sql);
    $comando -> bindParam(":id_cate", $id_cate);

    $comando -> execute();

    $resultado = $comando -> fetchAll(PDO::FETCH_ASSOC);

    print_r($resultado);
?>
