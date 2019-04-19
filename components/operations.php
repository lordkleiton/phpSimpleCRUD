<p>O seguinte produto foi <?php echo $operacao ?>:</p>
<p>Nome: <?php echo $linha["nomes"] ?></p>
<p>Código identificador: <?php echo $linha["id"] ?></p>
<p>Preço: R$ <?php echo $linha["valor"] ?></p>
<p>Descrição: <?php echo $linha["descricao"] ?></p>
<img <?php echo "src=\"".$imgPath."\"" ?> <?php echo "alt=\"".$linha["descricao"]."\"" ?>>