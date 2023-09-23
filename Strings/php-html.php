<?php 

$nomeCampo = 'cam" /> <script>alert("teste"); </script>"';

?>


<!-- addslashes faz o escape em todos caracteres que precisam escapar, sejam barras, aspas etc -->
<input type="text" name="<?= addslashes($nomeCampo )?>" />


<!-- htmlentities converte tudo que pode ser código html para htmlcodes -->
<input type="text" name="<?= htmlentities($nomeCampo )?>" />