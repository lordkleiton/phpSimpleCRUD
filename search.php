<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados da pesquisa</title>
</head>
<body>
    <?php 
        include 'config.php';

        $pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $password);
        $statement = ($_GET['all']) ? $pdo->prepare($qSelectAll) : $pdo->prepare($qSelect);

        $statement->execute(array(
            ':nome' => $_GET['searchFor'].'%'
        ));

        foreach($statement->fetchAll() as $linha){
            include 'components/search.php';
        }
    ?>
</body>
</html>