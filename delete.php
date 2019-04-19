<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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