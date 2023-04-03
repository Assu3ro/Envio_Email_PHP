<?php
$para = "assuero.cdd@gmail.com";//para onde vamos enviar
$assunto = "Teste simples de envio de email via PHP.";//assunto ou subject
$corpo = "Olá, esse é um teste de e-mail feito por PHP.";//Corpo da mensagem
$headeres = "From: assuero.cdd@gmail.com"


if (mail ($para, $assunto, $corpo, $headeres)) {
    echo "e-mail enviado para $para com sucesso!";

} else {
    echo "Falha no envio do e-mail";
}

?>