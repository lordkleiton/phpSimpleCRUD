<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/head.html' ?>
    <title>Atualização de produto</title>
</head>
<body>
    <?php 
        include 'config.php';

        $operacao = 'atualizado';

        $pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $password);
        $statement = $pdo->prepare($qUpdate);
        $auxStatement = $pdo->prepare($qSelectById);

        $auxStatement->execute(array(
            ':id' => $_POST['id']
        ));

        if (isset($_POST['keepImg'])){
            $statement->execute(array(
                ':nomes' => $_POST['name'],
                ':valor' => $_POST['price'],
                ':descricao' => $_POST['desc'],
                ':img' => $auxStatement->fetch()['img'],
                ':id' => $_POST['id']
            ));

            $newAuxStatement = $pdo->prepare($qSelectById);

            $newAuxStatement->execute(array(
                ':id' => $_POST['id']
            ));

            foreach($newAuxStatement->fetchAll() as $linha){
                $imgPath = $path.$linha['img'];
                
                include 'components/operations.php';
            }
        }
        else{
            unlink($path.$auxStatement->fetch()['img']);

            include 'upload.php';
        }
    ?>
</body>
</html>