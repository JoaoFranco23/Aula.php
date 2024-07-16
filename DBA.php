<?php
$users = array(
    "1", "joao vitor", "adamantina", "Brasil", "05-02-2000"
    "2", "carla", "sao paulo", "Brasil", "17-01-1999"
    "3", "Mafalda", "lucelia", "Brasil", "20-04-2002"
    "4", "Magy", "junqueiropolis", "Brasil", "05-05-2003"
);
$list(
    $ID = $_GET['ID'];
    $Nome_Completo = $_POST['Nome_Completo'];
    $Cidade = $_POST['$Cidade'];
    $Pais = $_POST['$Pais']; 
    $Data_Nasc = $_POST['Data_Nasc'];
) = $users;
echo "ID: $ID, Nome_Completo: $Nome_Completo, Cidade: $Cidade, Pais: $Pais, Data_Nasc: $Data_Nasc"; 
?>
