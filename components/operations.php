<h1 class="center">O seguinte produto foi <?php echo $operacao ?>:</h1>
<div class="conteudo">
    <h1 class="center"><?php echo $linha["nomes"] ?></h1>
    <p>Código identificador:<br><?php echo $linha["id"] ?></p>
    <p>Preço:<br>R$ <?php echo $linha["valor"] ?></p>
    <p>Descrição:<br><?php echo $linha["descricao"] ?></p>
    <img <?php echo "src=\"".$imgPath."\"" ?> <?php echo "alt=\"".$linha["descricao"]."\"" ?>>
</div>