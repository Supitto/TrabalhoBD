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
    
}
else 
{
    echo 'Voce deve fornecer um usuario ou senha.';
    header('Location: index.html');

}
?>