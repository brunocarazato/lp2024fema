<?php
    include 'Conexao.php';
    $sql = "select * from tiposoftware;";
    $con = Conexao::conectar(); 
    $listaTiposSoftware = $con->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Tipos de Software</title>
</head>
<body>
    <h1>Listar Tipos de Software</h1> 
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
        
        <?php foreach($listaTiposSoftware as $tipoSoftware) {?>
           <tr>
              <td> <?php echo $tipoSoftware['id']; ?> </td>
              <td> <?php echo $tipoSoftware['descricao']?> </td>
           </tr>
        <?php } ?>
    </table>
    
</body>
</html>