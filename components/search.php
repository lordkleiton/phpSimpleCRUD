<p>Nome: <?php echo $linha["nomes"] ?></p>
<p>Código do produto: <?php echo $linha["id"] ?></p>
<p>Preço: R$ <?php echo $linha["valor"] ?></p>
<p>Descrição do produto: <?php echo $linha["descricao"] ?></p>
<img <?php echo "src=\"".$path.$linha["img"]."\"" ?> <?php echo "alt=\"".$linha["descricao"]."\"" ?>>