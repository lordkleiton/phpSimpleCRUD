<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de produto</title>
</head>
<body>
    <?php 
        include 'config.php';

        $pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $password);
        $statement = $pdo->prepare($qSelectById);

        $statement->execute(array(
            ':id' => $_POST['id']
        ));

        foreach ($statement->fetchAll() as $linha){
            include 'components/formProductUpdate.php';
        }
    ?>
</body>
</html>