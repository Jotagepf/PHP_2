<?php
    include "conecta.php";
    echo "<br>";
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br><b>Mostrando todos os registros</b><br><br>";
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email: ". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }
    echo"<BR><b>Nomes que começam com 'd'</b><br><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario where nome like 'd%'";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email: ". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }
    echo"<BR><b>Ordenar os registros por email</b><br><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
  
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email: ". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }
    echo "<br>";
   echo "<b>Verificar se existe usuário='João Gabriel' com senha 1234 e mostrar seu email.Caso não exista, mostrar uma mensagem</b><br>";
   $sql = "SELECT id, nome, senha, email FROM usuario where nome='João Gabriel' and senha='1234'";
   $resultado = mysqli_query($conexao, $sql);
   echo "<br>";
   if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "Email: " . $registro["email"]. "<br>";
        
    }
   } else {
    echo "Nenhum registro encontrado.";
   }

    ?>