<?php
    $msg = 0;
    $msg = $_REQUEST['msg'];
?>


<!doctype html>
<html>
<head>
<title>SA IMOVEIS</title>
</head>
<body>
    <?php if($msg==enviado): ?>
    <h1>Mensagem Enviada. Agradecemos seu contato</h1>
    <?php else: ?>
    <fieldset>
        <legend><h2>CONTATO</h2></legend>

        <form action="formulario.php" method="post">
            
          <label for="nome">Nome Completo</label>
          <input type="text" name="nome" required><br>
            
          <label for="email">E-mail</label>
          <input type="text" name="email" required><br>
            
          <label for="telefone">Telefone</label>
          <input type="text" name="telefone" required><br>
          
         <select name="contato">
              <option value="alugar">Alugar</option>
              <option value="anunciar">Anunciar</option>
              <option value="comprar">Comprar</option>
              <option value="outros">Outros</option>
          </select><br>
            
          <textarea name="comentario" style="width:400px; height:200px">
          </textarea><br><br>
          
          <input type="submit">
            
        </form>
    </fieldset>
</body>
</html>