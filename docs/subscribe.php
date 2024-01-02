<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    file_put_contents('emails-cadastrados.txt', $email.PHP_EOL , FILE_APPEND | LOCK_EX);

    $to = $email;
    $subject = "Cadastro bem-sucedido na MinimaS";
    $message = "Você se cadastrou com sucesso na MinimaS, em breve, te enviaremos notícias dela. Para remover seu email da lista, envie a palavra: sair ";
    $headers = 'From: nao-responder@MinimaS.com' . "\r\n" .
        'Reply-To: your-email@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo "Obrigado! Seu e-mail foi cadastrado. <br>" . nl2br($cadastrados);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinimaS - Sucesso</title>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Cadastrado Com Sucesso 💕</h1>
    <p>Não usaremos seu email para anúncios, não vamos o vender, ou algo do tipo. Este email é apenas para enviar noticias sobre o projeto</p>
    <p><br><br>Para remover seu email da lista, digite a primeira parte do seu email no campo de cadastro, após o @ acrescente o seguinte: <br> Exemplo:  <strong>seu-email-aqui</strong>@remover.email</p>
</body>
</html>
