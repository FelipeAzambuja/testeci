<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Mensagem</title>
</head>
<body>

    <div class="container mt-5">

        <div class="alert alert-info">
            <?php echo $message; ?>
            <p class="mt-3"><?php echo anchor("/produto", 'Acessar pedidos') ?></p>
            <p class="mt-3"><?php echo anchor("/produto", 'Acessar produtos') ?></p>
        </div>
        </div>

    </div>
</body>
</html>