<?php 
include "acoes.php";

$enderecos = buscarTabela("enderecos");
$VERIFICAR_LINHAS = $enderecos->num_rows > 0;
?>

<?php  if($VERIFICAR_LINHAS):?>
    <?php foreach($enderecos as $enderecos):?>
        <h2>DADOS</h2>
<ul>
    <li><?php echo $enderecos['cep']?></li>
    <li><?php echo $enderecos['longadouro']?></li>
    <li><?php echo $enderecos['bairro']?></li>
    <li><?php echo $enderecos['localidade']?></li>
    <li><?php echo $enderecos['uf']?></li>
    <li><?php echo $enderecos['estado']?></li>
    <li><?php echo $enderecos['regiao']?></li>
    <li><?php echo $enderecos['ddd']?></li>
</ul>
         <?php endforeach?>

         <?php else:?>
         <p>NENHUM <B>cep</B><b>em nosso sistema!</b></p>
         <?php endif?>