<?php 

    $uid = md5(uniqid(rand(), true));

    $arquivo = $path.basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

    $msg = '';
    
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $msg = "O arquivo não é uma imagem. ";
            $uploadOk = 0;
        }
    }
    
    if (file_exists($arquivo)) {
        $msg = $msg."O arquivo já existe. ";
        $uploadOk = 0;
    }
    
    if ($_FILES["img"]["size"] > 500000) {
        $msg = $msg."O arquivo é muito grande. ";
        $uploadOk = 0;
    }
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        $msg = $msg."Somente JPG, PNG e JPEG permitidos. ";
        $uploadOk = 0;
    }

    $imgName = $uid.'.'.$imageFileType;
    $imgPath = $path.$imgName;

    if ($uploadOk == 0) {
        $msg = $msg."Não foi possível fazer o upload do arquivo.";
    } 
    else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $imgPath)){

            if (isset($_POST['id'])){
                $statement->execute(array(
                    ':nomes' => $_POST['name'],
                    ':valor' => $_POST['price'],
                    ':descricao' => $_POST['desc'],
                    ':img' => $imgName,
                    ':id' => $_POST['id']
                ));
            }
            else{
                $statement->execute(array(
                    ':nomes' => $_POST['name'],
                    ':valor' => $_POST['price'],
                    ':descricao' => $_POST['desc'],
                    ':img' => $imgName
                ));
            }
    
            $auxStatement->execute();

            foreach($auxStatement->fetchAll() as $linha){
                include 'components/operations.php';
            }
        } 
        else{
            $msg = $msg."Não foi possível fazer o upload do arquivo. ";
        }
    }

    if ($uploadOk == 0): 
?>
        <p><?php echo $msg; endif; ?></p>