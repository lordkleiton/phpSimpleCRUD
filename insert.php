<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/head.html' ?>
    <title>Cadastro de produto</title>
</head>
<body>
    <?php 
        include 'config.php';

        $operacao = 'cadastrado';

        $pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $password);
        $statement = $pdo->prepare($qInsert);
        $auxStatement = $pdo->prepare($qSelectLastInsert);

        include 'upload.php';
    ?>
</body>
</html>