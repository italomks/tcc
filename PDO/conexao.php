<?php

function conectar()
{
    return new PDO('mysql:host=localhost;dbname=db_curriculo', 'root', '18201511');
}

function pesquisar($sql)
{
    $conexao = conectar();
    $statement = $conexao->query($sql, PDO::FETCH_ASSOC);
    return $statement->fetchAll();
}

function inserir($sql) {

    $conexao = conectar();

    try{
        $conexao->exec($sql);

        $conexao->errorInfo();

    }catch(Exception $exception){
        echo $exception->getMessage();
    }

    return $conexao->lastInsertId();
}
function excluir($sql)
{
    $conexao = conectar();
    $statement = $conexao->query($sql);
    return $statement->execute();
}

function editar($sql)
{
    $conexao = conectar();
    $statement = $conexao->query($sql);
}