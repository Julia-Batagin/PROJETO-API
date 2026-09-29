<?php
require "conexao.php";

$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo == "POST"){
    $json = file_get_contents("php://input");
    $dados = json_decode($json,true);

    if($dados["prioridade"] != "baixa" && 
       $dados["prioridade"] != "media" && 
       $dados["prioridade"] != "alta"){
        echo json_encode(["Mensagem" => "Prioridade inválida!"]);
    }

    if($dados["status"] != "aberto" && 
       $dados["status"] != "em andamento" && 
       $dados["status"] != "concluido"){
        echo json_encode(["Mensagem" => "Status inválido!"]);
        exit;
    }

    $sql = "INSERT INTO chamados (equipamento,setor,descricao,prioridade,status) VALUES (?,?,?,?,?)";

    $comando = $pdo -> prepare($sql);

    $comando -> execute([
        $dados["equipamento"],
        $dados["setor"],
        $dados["descricao"],
        $dados["prioridade"],
        $dados["status"]
    ]);

    echo json_encode(["Mensagem" => "Chamado cadastrado com sucesso!"]);
}

if($metodo == "GET"){
    $sql = "SELECT * FROM chamados";

    $comando = $pdo -> query($sql);

    $resposta = $comando -> fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($resposta);
}

if($metodo == "PUT"){
    $json = file_get_contents("php://input");
    $dados = json_decode($json,true);

    if($dados["prioridade"] != "baixa" && 
       $dados["prioridade"] != "media" && 
       $dados["prioridade"] != "alta"){
        echo json_encode(["Mensagem" => "Prioridade inválida!"]);
        exit;
    }

    if($dados["status"] != "aberto" && 
       $dados["status"] != "em andamento" && 
       $dados["status"] != "concluido"){
        echo json_encode(["Mensagem" => "Status inválido!"]);
        exit;
    }

    $sql = "UPDATE chamados SET equipamento=?,setor=?,descricao=?,prioridade=?,status=? WHERE id=?";

    $comando = $pdo -> prepare($sql);

    $comando -> execute([
        $dados["equipamento"],
        $dados["setor"],
        $dados["descricao"],
        $dados["prioridade"],
        $dados["status"],
        $dados["id"]
    ]);

    echo json_encode(["Mensagem" => "Chamado atualizado com sucesso!"]);
}

if($metodo == "DELETE"){
    $json = file_get_contents("php://input");
    $dados = json_decode($json,true);

    $sql = "DELETE FROM chamados WHERE id=?";

    $comando = $pdo -> prepare($sql);

    $comando -> execute([
        $dados["id"]
    ]);

    echo json_encode(["Mensagem" => "Chamado excluído com sucesso!"]);
}

?>