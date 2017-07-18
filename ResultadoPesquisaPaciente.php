<?php

if (isset($_COOKIE['login'])
{
    ?>
    <html>
    <body>
    <?php
        echo("<table>")  //Cria uma tag table
        while($row = $result->fetch_array())
        {
            echo("<tr>")
            echo("<td>".$row['nome']." ".$row['prenome']."</td><td> <a href='ExibeProntuario.php?cpf=".$row['cpf']."</td>");
            echo("</tr>");
        }
    ?>
    </body>
    </html>
    <?php
    }
}
else
{
    header('Location: login.html');
}

?>