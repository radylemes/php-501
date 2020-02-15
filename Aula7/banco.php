<?php

$servidor = 'mysql:host=localhost;dbname=curso';
$usuario = 'root';
$senha = '4linux';

echo"<pre>";

try{
    $conexao = new PDO($servidor,$usuario,$senha);

    foreach($conexao->query("SELECT * FROM alunos") as $row){
        print_r($row);
        echo"<br>";
    }
   echo $conexao->exec("DELETE FROM alunos where id ='2'");

//   echo $conexao->exec('UPDATE alunos set nome = "Pedro" where id = "3"');

}catch(PDOException $e){
    echo $e;
    die();
}catch(Exception $e){
    echo $e;
    die();
}finally{
    unset($conexao);
}