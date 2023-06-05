<?php 

// function send(array $data){
//     $to = 'luzyour078@gmail.com';
//     $subject = $data->subject;
//     $message = $data->message;
//     $headers = "From: {$data->email}" . "\r\n".
//     "Reply-To: contato@devclass.com.br". "\r\n".
//     "X-Mailer: PHP/". phpversion();

//     return mail($to,$subject,$message, $headers);
// }

function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain'; // mudei de SSL para PLAIN
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com'; // servidor usado vai ser o do gmail
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = ''; // esperando o email de quem vai envir   
    $email->Password = ''; // esperando a senha da de quem vai enviar
    $email->isHTML(true);
    $email->setFrom('luzyour078@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver html';
    $email->MsgHTML($data['mensagem']);
    return $email->send();
}

?>