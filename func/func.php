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



function capturarIdSetores($campoSetor,$tabela,$campoParametro, $idParametro){
    $conn = conectar();
    try {
        $conn->beginTransaction();
           
            $sqlLista = $conn->prepare("SELECT $campoSetor FROM $tabela WHERE $campoParametro = ?");
            $sqlLista->bindValue(1, $idParametro, PDO::PARAM_STR);
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



function listarDadosTresParametro($campos,$tabela,$campoParametro,$campoParametroDois, $campoParametroTres, $idParametro, $idParametroDois, $idParametroTres){
    $conn = conectar();
    try {
        $conn->beginTransaction();
           
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $campoParametro = ? AND $campoParametroDois = ? AND $campoParametroTres");
            $sqlLista->bindValue(1, $idParametro, PDO::PARAM_STR);
            $sqlLista->bindValue(2, $idParametroDois, PDO::PARAM_STR);
            $sqlLista->bindValue(2, $idParametroTres, PDO::PARAM_STR);
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

function insertdois($tabela, $camposTabela, $valor1, $valor2)
{

    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
 

        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function insertquatro($tabela, $camposTabela, $valor1, $valor2, $value3, $value4)
{

    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $value4, PDO::PARAM_STR);

        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function insertoito($tabela, $camposTabela, $valor1, $valor2, $value3, $value4, $value5, $value6, $value7, $value8)
{

    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $value4, PDO::PARAM_STR);
        $sqlInsert->bindValue(5, $value5, PDO::PARAM_STR);
        $sqlInsert->bindValue(6, $value6, PDO::PARAM_STR);
        $sqlInsert->bindValue(7, $value7, PDO::PARAM_STR);
        $sqlInsert->bindValue(8, $value8, PDO::PARAM_STR);

        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}


function listarProdutosEQuantidades($conexao, $tabela)
{
    // Consulta SQL para recuperar os produtos e suas quantidades
    $sql = "SELECT produto, quantentregue FROM $tabela";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    // Inicialize um array para rastrear as quantidades de produtos
    $produto_quantidades = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $produto = $row["produto"];
        $quantidade = (int) $row["quantentregue"]; // Certifique-se de converter para inteiro

        if (isset($produto_quantidades[$produto])) {
            $produto_quantidades[$produto] += $quantidade; // Soma a quantidade ao produto existente
        } else {
            $produto_quantidades[$produto] = $quantidade; // Inicia a quantidade do produto
        }
    }

    // Retorne os resultados como um array associativo
    return $produto_quantidades;
}




function inserquatro($tabela, $camposTabela, $valor1, $valor2, $value3, $value4, )
{

    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?, ? )");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $value4, PDO::PARAM_STR);


        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function insercinco($tabela, $camposTabela, $valor1, $valor2, $value3, $value4, $value5)
{

    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?, ?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $value4, PDO::PARAM_STR);
        $sqlInsert->bindValue(5, $value5, PDO::PARAM_STR);


        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}


function insertseis($tabela, $camposTabela, $valor1, $valor2, $value3, $value4, $value5, $value6)
{

    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?, ?, ?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $value4, PDO::PARAM_STR);
        $sqlInsert->bindValue(5, $value5, PDO::PARAM_STR);
        $sqlInsert->bindValue(6, $value6, PDO::PARAM_STR);



        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function controleSaidaProduto($conn, $tabela, $produto, $quantidade) {
    $sql = "SELECT quantentregue FROM $tabela WHERE produto = :produto";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':produto', $produto);
    $stmt->execute();
    $quantidade_atual = $stmt->fetchColumn();

    if ($quantidade_atual !== false) {
        if ($quantidade_atual >= $quantidade) {
            // Use transações para garantir a consistência dos dados
            $conn->beginTransaction();

            try {
                $nova_quantidade = $quantidade_atual - $quantidade;

                $atualizar_quantidade = $conn->prepare("UPDATE $tabela SET quantentregue = :nova_quantidade WHERE produto = :produto");
                $atualizar_quantidade->bindParam(':nova_quantidade', $nova_quantidade);
                $atualizar_quantidade->bindParam(':produto', $produto);
                $atualizar_quantidade->execute();

                $conn->commit(); // Confirma a transação

                return "Quantidade atualizada na tabela '$tabela'.";
            } catch (Exception $e) {
                $conn->rollBack(); // Em caso de erro, desfaz a transação
                return "Erro ao atualizar a quantidade: " . $e->getMessage();
            }
        } else {
            return "Erro: Não há produtos suficientes disponíveis. Quantidade disponível: $quantidade_atual";
        }
    } else {
        return "Erro: Produto não encontrado na tabela '$tabela'.";
    }
}



