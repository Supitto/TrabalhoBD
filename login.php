<?php
/*conecta com o banco*/
/*Id:
 * 0 admin
 * 1 cuidador
 * 2 familiar
 * 3 paciente
 */
if (isset($_POST['CPF']))
{
    //Checa conexao
    $connection = mysqli("localhost", "root", "reprovar", "prontuarioMedico");
    $consulta = "";
    
}
else 
{
    echo 'Voce deve fornecer um usuario ou senha.';

}
?>