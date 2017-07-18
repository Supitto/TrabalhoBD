<?php
/*conecta com o banco*/
/*Id:
 * 0 admin
 * 1 cuidador
 * 2 familiar
 * 3 paciente
 */
if (isset($_POST['usuario']) && isset($_POST['senha')) 
{
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) 
    {
        setcookie("login",[$_POST['usuario'],$_POST['senha'],$id],time()+60*60*24*365, '/')
        header('Location: menu.html');
    }
    else
    {
        echo 'Usuario ou senha invalido.';
    }
}
else 
{
    echo 'Voce deve fornecer um usuario ou senha.';
}
?>