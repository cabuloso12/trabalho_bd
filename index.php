<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha empresinha</title>
    <link rel="stylesheet" href="style.css" />
    <img src="logo.png" alt="some text" width=60 height=40>
</head>
<body>
  <?php
  //criptografia da senha
 <form action=""></form>
</body>
 <nav class="navbar">
    <ul class="nav-list">
    <li><a href="#home">Home</a></li>
            <li><a href="#Formulário">Contato</a></li>
          </ul>
        </nav>
        <div class="title">
            <section id="home">
            $nost= 'localhost'
            $user= 'root'; //user padrão
            $password= ''; //senha padrão(vazia)
            $database= 'davinto';

            //conectar ao banco

            $conn= new MYSQL($host$user$password,$database);

            //verificar conexão

            if($conn -> connect_error){
              die("falha na conexão"$conn -> connect_error);

            }

            //receber dados do forms

            $dados= filter_input_arrax (input_fort,filter_default);

            //acessar if quando enviar

            if(!empty($dados["senologin"])){

              //preparar consulta SQL

              $query_usuario= "select (0, senha fazer usuario virefe usuario= ? limit 1")
            }

            ?>
            </html>
