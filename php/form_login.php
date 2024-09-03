<?php
    session_start();
    
    $camposVazios = empty($_POST['email']) || empty($_POST['senha']); 
    include '';
    if (isset($_POST['submit']) && !$camposVazios){
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        include_once('config.php');

        // execulta a consulta no banco de dados
        $sql = "SELECT * FROM usuario WHERE Email = '$email' and Senha = '$senha' ";

        $consulta = $dbConnect->query($sql);
        $registro = $consulta->num_rows;
        $extisteUsuario = $registro > 1;

        // PODE DAR ERRO

        if ( $existeUsuario) {

            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;

            while ($row = $consulta->fetch_assoc()) {

                $usuario = new Usuario(
                    $row["Nome"],
                    $row["Sobrenome"],
                    $row["Genero"],
                    $row["Email"],
                    $row["Senha"],
                    $row["DaNasc"],
                    $row["Cep"],
                    $row["Logradouro"],
                    $row["Bairro"],
                    $row["Cidade"],
                    $row["Estado"]
                );


            }

            // me retornar o objeto referente a esses dados para passar

            header("Location: ./pags/pag_users.html"); // N testei :/

        } else {

            header("Location: ./pags/pag_login.html");

        }

    } else {
        echo'fudeu';
    }