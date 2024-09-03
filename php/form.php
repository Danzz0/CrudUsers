<?php

    include("./src/models/Usuario.php");


    if (isset($_POST['submit'])){

        $nome = formataNome($_POST['nome']);
        $endereco = buscarEndereco($_POST['cep']);

        // posteriormente criar controller para validação
        $usuario = new Usuario($nome[0], $nome[1], $_POST['email'], $_POST['senha'], $_POST['sexo'],$_POST['dataNasc'], $endereco['cep'], $endereco['logradouro'], $endereco['bairro'], $endereco['localidade'], $endereco['uf']);

        include_once('config.php');

        $nome = formataNome($nomeCompleto); // -> pertence ao controller
        $endereco = buscarEndereco($cep); // -> pertence ao controller

        $sql =  "INSERT INTO usuario(Nome, Sobrenome, Genero, Email, Senha, DaNasc, Cep, Logradouro, Bairro, Cidade, Estado) 
        VALUES ('{$usuario->get_nome()}', '{$usuario->get_sobrenome()}', '{$usuario->get_genero()}', '{$usuario->get_email()}', '{$usuario->get_senha()}', '{$usuario->get_daNascimento()}', '{$usuario->get_cep()}', '{$usuario->get_rua()}', '{$usuario->get_bairro()}', '{$usuario->get_cidade()}', '{$usuario->get_estado()}')";

        $insert = mysqli_query($dbConnect, $sql);

        if (!$insert) {
            echo "Erro ao inserir os dados: " . mysqli_error($dbConnect);
        } else {
            echo "Dados inseridos com sucesso!";
        }

    } else {
        echo "fudeu";
    }


    function formataNome( $nomeCompleto ) {

        $nomeFormatado = explode(" ", $nomeCompleto, 2);

        return $nomeFormatado;
    }


    // pertence ao controller
    function buscarEndereco($cep){

        $url = "https://viacep.com.br/ws/$cep/json/";

        $curl = curl_init($url);



        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'content-type: application/json'
        ]);

        $res = curl_exec($curl);

        $dados = json_decode($res, true);

        return $dados;
    }

/*
Nome varchar(40) 
Sobrenome varchar(25) 
Genero char(1) 
Email varchar(100) 
Senha varchar(45) 
DaNasc date 
Cep char(9) 
Logradouro varchar(45) 
Bairro varchar(45) 
Cidade varchar(35) 
Estado char(2)
*/