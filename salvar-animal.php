<?php
    include("./config.php"); 
    switch ($_REQUEST["acao"]) {

        case 'cadastrar':
            $numero = $_POST["numero"];
            $sexo = $_POST["sexo"];
            $nascimento = $_POST["nascimento"];

            $sql = "INSERT INTO animais (numero, sexo, nascimento) VALUES ('{$numero}', '{$sexo}', '{$nascimento}')";

            $res = $conn->query($sql); 

            if ($res == true) {
                echo "<script>alert('Cadastro realizado com sucesso')</script>";
                echo "<script>location.href='https://gabrielcaetano.000webhostapp.com/?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar animal')</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $numero = $_POST["numero"];
            $sexo = $_POST["sexo"];
            $nascimento = $_POST["nascimento"];

            $sql = "UPDATE animais SET numero='{$numero}', sexo='{$sexo}', nascimento='{$nascimento}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>alert('Editado com sucesso')</script>";
                print "<script>location.href='https://gabrielcaetano.000webhostapp.com/?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao editar dados do animal')</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql1 = "DELETE FROM pesagens WHERE id_animal=".$_REQUEST["id"];
            $res1 = $conn->query($sql1);

            $sql2 = "DELETE FROM animais WHERE id=".$_REQUEST["id"];
            $res2 = $conn->query($sql2);

            if ($res1 == true and $res2 == true) {
                echo "<script>alert('Exluído com sucesso')</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao excluir dados do animal')</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
    }