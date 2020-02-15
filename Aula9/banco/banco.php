<?php

$servidor = "mysql:host=localhost;dbname=curso";
$usuario = "root";
$senha = "4linux";
echo "<pre>";
try{
    $client = new PDO($servidor,$usuario,$senha);
    //definido o modo de erro da classe pdo

    $client->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $client->beginTransaction();
    $statement = $client->prepare('SELECT * FROM alunos WHERE nome LIKE :nome');

    $nome = "Daniel";
    $statement->bindParam(':nome', $nome);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_CLASS);

    var_dump($result);

    $client->commit();

    // echo $client->exec("INSERT INTO alunos (nome, sobrenome, email)
    //             VALUES ('Daniel', 'lemes', 'teste@teste')");

    // foreach($client->query('SELECT * FROM alunos') as $aluno){
    //     print_r($aluno);
    //     echo"<br>";
    //     echo$aluno[0];
    //     echo"<br>";
    // }


}catch(PDOException $e){
    echo "Erro com o banco de dados: {$e}";
    $client->rollBack();

}catch(Exception $e){
    echo $e;
}finally{
    unset($client);
}