<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" src="../public/css/style.css">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
        .body{
            padding: 0px;
            margin: 0px;
            box-sizing:border-box;
            font-family: Lato;
            -webkit-font-smoothing: antialiased;
        }

        .container{
            background-color:#2b2d42;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .form-box{
            background-color: #edf2f4;
            border-top: #d90429 10px solid;
            padding: 20px;
            width: 400px;
            height: 350px;
            display: flex;
            flex-flow: row nowrap;
            align-items:center;
            justify-content: center;
            border-radius: 12px;


        }
        .estilizarElementos{
            display: flex;
            flex-flow: column;
            align-items: center;
            justify-content:space-around;
/*             border: #000 1px solid; */
            height: 100%;
            width: 100%;

        }

        .estilizarElementos div h1{
            text-transform: uppercase;
            text-shadow: 2px 2px #ef233c ;
            font-size: 30px;
        }


        .form-input{
            background: none;
            border: #ef233c 3px solid;
            border-radius: 15px;
            width: 200px;
            height: 30px;
            outline: none;
        }

        .estilizarElementos input.form-btn{
            width: 150px;
            height: 30px;
            background: #ef233c;
            border: #ef233c 3px solid;
            border-radius: 20px;
        }
        .item5 a{
            text-decoration: none;
            color: #2b2d42;
            background-color: #fff;
            border-radius: 30px;
            font-weight: bold;
            padding: 2px;
            border:#F57A89 2px solid;
        }

        .item5{
            background-color:#F8A0AA;
            display:flex;
            justify-content: space-around;
            border-radius: 30px;
            padding: 5px;
            height:20px;
            align-items: center;
            width: 300px;
        }

        .form-btn{
            text-transform: uppercase;
            font-size: 15px;
            font-family: Lato;
        }

        .form-input:focus{
            border: #d90429 3px solid;
        }
    </style>


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

    <script>
        var elemento = document.getElementById('form-btn');
        elemento.addEventListener('click', () => {
            window.open('http://localhost/testecode/','_blank');
        });
    </script>
</body>
</html>