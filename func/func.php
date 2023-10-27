<?php
//validar Sessao usuário
// function validarSessao($redirecionar)
// {
//     $conn = conectar();
//     try {
//         $conn->beginTransaction();
//         if (isset($_SESSION['idpessoa']) && !empty($_SESSION['idpessoa']) && is_numeric($_SESSION['idpessoa'])) {
//             $idAdminPessoa = $_SESSION['idpessoa'];
//             $sqlLista = $conn->prepare("SELECT idpessoa, nome, avatar, email, tipousuario "
//                 . "FROM pessoa "
//                 . "WHERE idpessoa = ? AND ativo = ?");
//             $sqlLista->bindValue(1, $idAdminPessoa, PDO::PARAM_INT);
//             $sqlLista->bindValue(2, 'A', PDO::PARAM_STR);
//             $sqlLista->execute();
//             $conn->commit();
//             if ($sqlLista->rowCount() > 0) {
//                 return $sqlLista->fetchAll(PDO::FETCH_OBJ);
//             } else {
//                 return 'Vazio';
//             };
//         } else {
//             destruirSessaoRedirecionar("$redirecionar");
//             exit();
//         };
//     } catch
//     (PDOExecption $e) {
//         echo 'Exception -> ';
//         return ($e->getMessage());
//         $conn->rollback();
//     };
//     $conn = null;
// }
function listarDadosDoisParametro($campos,$tabela,$campoParametro,$campoParametroDois, $idParametro,$parametroDois){
    $conn = conectar();
    try {
        $conn->beginTransaction();
           
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $campoParametro = ? AND $campoParametroDois = ?");
            $sqlLista->bindValue(1, $idParametro, PDO::PARAM_STR);
            $sqlLista->bindValue(2, $parametroDois, PDO::PARAM_STR);
            $sqlLista->execute();
            $conn->commit();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            };

    } catch
    (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}