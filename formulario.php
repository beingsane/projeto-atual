<?php
    $para= "inst.fabio@hotmail.com";
    $assunto= "contato pelo site";
    $nome= $_REQUEST['nome'];
    $email= $_REQUEST['email'];
    $telefone= $_REQUEST['telefone'];
    $contato= $_REQUEST['contato'];
    $comentario= $_REQUEST['comentario'];

    $corpo = "<strong>Mensagem de Contato</strong><br><br>";
    $corpo .= "<br><strong>Nome: </strong> $nome";
    $corpo .= "<br><strong>E-mail: </strong> $email";
    $corpo .= "<br><strong>Telefone: </strong> $telefone";
    $corpo .= "<br><strong>Contato: </strong> $contato";
    $corpo .= "<br><strong>Comentario: </strong> $comentario";
    
    /* $header = "From: $email Reply-to: $email"
    $header .= "Content-type: text-html; charset= utf-8" */
        
    @mail($para,$assunto,$corpo,$header);
    
   /* header("location:contato.php?msg=enviado"); */

     
?>