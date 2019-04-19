<div class="conteudo">
    <h1>Alteração de produto</h1>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" <?php echo "value=\"".$_POST['id']."\"" ?> hidden>
        <label for="nome">Insira o nome do produto: </label>
        <input type="text" name="name" id="nome" <?php echo "value=\"".$linha["nomes"]."\"" ?> required><br>
        <label for="preco">Insira o preço do produto: </label>
        <input type="number" name="price" id="preco" <?php echo "value=\"".$linha["valor"]."\"" ?> required><br>
        <label for="descricao">Insira a descrição do produto: </label>
        <input type="text" name="desc" id="descricao" <?php echo "value=\"".$linha["descricao"]."\"" ?> required><br>
        <label for="campoImg">Selecione uma nova imagem para o produto: </label>
        <input type="file" name="img" id="campoImg"><br>
        <label for="check">Manter imagem atual?</label>
        <input type="checkbox" name="keepImg" id="check"><br>
        <img <?php echo "src=\"".$path.$linha["img"]."\"" ?> <?php echo "alt=\"".$linha["img"]."\"" ?>><br>
        <input type="submit" value="Atualizar" name="submit">
    </form>
</div>