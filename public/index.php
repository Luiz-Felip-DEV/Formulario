<?php require_once "../bootstrap.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP devclass</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <?php 
            try {
                require load();
            }catch(Exception $e){
                echo $e->getMessage();
            }
        ?>
    </div>
</body>
</html>