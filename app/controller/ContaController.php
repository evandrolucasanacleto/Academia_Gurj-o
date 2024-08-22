<?php
include_once "../conexao/Conexao.php";
include_once "../model/Conta.php";
include_once "../dao/ContaDAO.php";

//instancia as classes
$conta = new Conta();
$contadao = new ContaDAO();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $conta->setNome($d['nome']);
    $conta->setSobrenome($d['sobrenome']);
    $conta->setTelefone($d['telefone']);
    $conta->setEmail($d['email']);
    $conta->setSenha($d['senha']);

    $contadao->create($conta);

    header("Location: ../../");
} 
// se a requisição for editar
else if(isset($_POST['editar'])){

    $conta->setNome($d['nome']);
    $conta->setSobrenome($d['sobrenome']);
    $conta->setTelefone($d['telefone']);
    $conta->setEmail($d['email']);
    $conta->setSenha($d['senha']);
    $conta->setId($d['id']);

    $contadao->update($conta);

    header("Location: ../../");
}
// se a requisição for deletar
else if(isset($_GET['del'])){

    $conta->setId($_GET['del']);

    $contadao->delete($conta);

    header("Location: ../../");
}else{
    header("Location: ../../");
}