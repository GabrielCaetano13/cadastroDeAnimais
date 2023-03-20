<?php
    include("./config.php"); 
    switch ($_REQUEST["acao"]) {
        case 'pesar':
            $id_animal = $_POST["id_animal"];
            $data_pesagem = $_POST["data_pesagem"];
            $peso = $_POST["peso"];

            $sql = "INSERT INTO pesagens (id_animal, data_pesagem, peso) VALUES ('{$id_animal}', '{$data_pesagem}', '{$peso}')";

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>alert('Peso cadastrado com sucesso')</script>";
                print "<script>location.href='https://gabrielcaetano.000webhostapp.com/?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar peso')</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
            
        case 'editar-pesagem':
            $id_pesagem = $_POST["id_pesagem"];
            $id_animal = $_POST["id_animal"];
            $data_pesagem = $_POST["data_pesagem"];
            $peso = $_POST["peso"];

            $sql = "UPDATE pesagens SET id_animal='{$id_animal}', data_pesagem='{$data_pesagem}', peso='{$peso}' WHERE id_pesagem=".$_REQUEST['id_pesagem'];

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>alert('Editado com sucesso')</script>";
                echo "<script>location.href='https://gabrielcaetano.000webhostapp.com/?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao editar dados do animal')</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir-pesagem':
            $sql = "DELETE FROM pesagens WHERE id_pesagem=".$_REQUEST["id_pesagem"];

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>alert('Exluído com sucesso')</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao excluir dados do animal')</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
    }