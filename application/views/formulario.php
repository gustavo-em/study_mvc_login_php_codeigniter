<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css"/>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <form action="" method="post" class="estilizarElementos">
                    <div class="item">
                        <h1><?php echo $nome; ?></h1>
                    </div>
                    <div class="item">
                        <input type="text" name="username" class="form-input">
                    </div>
                    <div class="item">
                        <input type="password" name="username" class="form-input">
                    </div>
                    <div class="item">
                        <input type="submit" class="form-btn" id="form-btn">
                    </div>
                    <div class="item5">
                        <p>Não é registrado?</p> <a href="cadastro.html">Crie uma conta</a>
                    </div>
            </form>
        </div>  
    </div>


    <script type="text/javascript" src="../public/js/script1.js"></script>

</body>
</html>