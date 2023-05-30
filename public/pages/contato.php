<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="/pages/forms/contato.php" method="POST" role="form">

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Nome">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="">Assunto</label>
            <input type="text" class="form-control" name="subject" placeholder="Assunto">
        </div>

        <div class="form-group">
            <label for="">Mensagem</label>
            <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Digite sua mensagem"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>