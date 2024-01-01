<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    file_put_contents('emails.txt', $email.PHP_EOL , FILE_APPEND | LOCK_EX);

    $to = $email;
    $subject = "Cadastro bem-sucedido na MinimaS";
    $message = "Você se cadastrou com sucesso na MinimaS, em breve, te enviaremos notícias dela. Para remover seu email da lista, envie a palavra: sair ";
    $headers = 'From: nao-responder@MinimaS.com' . "\r\n" .
        'Reply-To: your-email@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo "Obrigado! Seu e-mail foi cadastrado.";
}
?>
