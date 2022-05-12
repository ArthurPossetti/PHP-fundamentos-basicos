<?php
    $id_fab = $_POST['id_fab'];
    require_once('configuracao.php');

    $sql = <<<EOD
        select
            id_fab,
            nome,
            cnpj
        from
            fabricantes
        where 
            id_fab = :id_fab
    EOD;

    $comando = $conexao -> prepare($sql);
    $comando -> bindParam(":id_fab", $id_fab);

    $comando -> execute();

    $resultado = $comando -> fetchAll(PDO::FETCH_ASSOC);

    print_r($resultado);
?>
