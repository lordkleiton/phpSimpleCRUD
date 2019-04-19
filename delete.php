<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/head.html' ?>
    <title>Resultado da operação</title>
</head>
<body>
    <?php 
        include 'config.php';

        $pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $password);
        $statement = $pdo->prepare($qDelete);
        $auxStatement = $pdo->prepare($qSelectById);

        $auxStatement->execute(array(
            ':id' => $_POST['id']
        ));
        $statement->execute(array(
            ':id' => $_POST['id']
        ));

        foreach($auxStatement->fetchAll() as $linha){
            include 'components/delete.php';
        }

        unlink($path.$linha["img"]);
    ?>
</body>
</html>