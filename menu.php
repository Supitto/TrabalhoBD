<?php
if (isset($_COOKIE['login'])
{
   ?>
   <html>
        <head>
            <title> Menu </title>
        </head>
        <body>
            <a href="PesquisaPaciente.php">Pesquisa do prontario do paciente</a>
            <a href="">Alteração de Dados Pessoais</a>
            <?php
                if($_COOKIE['login'][3]==1||$_COOKIE['login'][3]==0)
                {
                    echo('<a href="">Cadastro de Paciente</a>');
                    echo('<a href="">Nova entrada de Prontuario</a>')
                }
            <a href="logout.php">Logout</a>
        </body>
   </html>
   <?php 
    
} else {
    header('Location: login.html');
}
?>