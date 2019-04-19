<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/head.html' ?>
    <title>Cadastro de produto</title>
</head>
<body>
    <a href="index.php"><div class="btnVoltar"><</div></a>
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