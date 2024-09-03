<?php

    session_start();

    $emailNaSessao = isset($_SESSION["email"]);
    $senhaNaSessao =  isset($_SESSION["senha"]);
    if ( !$emailNaSessao && !$senhaNaSessao ) {


        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("Location: ../index.html");
    }



    // colocar esses dados no 
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
    <link rel="stylesheet" href="../Assets/css/usuarios.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="box-users">



            


            <div class="formulario">
                <h1>Usuários</h1>


                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Rua</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>UF</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td name="id" id="id">1</td>
                            <td name="nome" id="nome">Danilo Lima Gomes</td>
                            <td name="email" id="email">danilo.limagomes10@gmail.com</td>
                            <td name="rua" id="rua">Professora Ivanira Paisinho</td>
                            <td name="rua" id="rua">Cohabinal</td>
                            <td name="cidade" id="cidade">Parnamirim</td>
                            <td name="uf" id="uf">RN</td>
                        </tr>                
                    </tbody>
                </table>


                
                
            </div>

    </div>
</body>
</html>