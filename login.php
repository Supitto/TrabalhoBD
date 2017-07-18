<?php
/*conecta com o banco*/
/*Id:
 * 0 admin
 * 1 cuidador
 * 2 familiar
 * 3 paciente
 */
if (isset($_POST['CPF']) && isset($_POST['tipo'])) 
{
    //Checa conexao
    $connection = mysqli("localhost", "root", "reprovar", "prontuarioMedico");
    $consulta = "";
    switch($_POST['tipo'])
    {
        case "1":
            $consulta = "SELECT CPF FROM `paciente` WHERE CPF = '".$_POST['CPF']."';";
            break;
        case "2":
            $consulta = "SELECT CPF FROM `dadosCuidadoresProf` WHERE CPF = '".$_POST['CPF']."';";
            break;
        case "3":
            $consulta = "SELECT CPF FROM `dadosCuidadoresNProf` WHERE CPF = '".$_POST['CPF']."';";
            break;
        case "4":
            $consulta = "SELECT `CPFfamiliar` as CPF FROM `responsaveis` WHERE `CPFfamiliar` = '".$_POST['CPF']."';";
            break;
    }
    //Faz a querry no banco de dados
   
}
else 
{
    echo 'Voce deve fornecer um usuario ou senha.';
    header('Location: index.html');

}
?>