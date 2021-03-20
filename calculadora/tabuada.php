<?php
header("Content-type:text/html; charset=utf8");
$numero = $_POST["numero"];
$i = 1;
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <title>Tabuada 2C1</title>
    <style>
        table, th, td{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<table >
    <thead>
        <tr>
            <th>Número</th>
            <th> </th>
            <th>Multiplicador</th>
            <th> </th>
            <th>Resultado</th>
        </tr>
    </thead>
    <tbody>
     <?php for($i = 1; $i <= 10; $i++) { ?>
        <tr>
            <td><?php echo $numero; ?></td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo ($numero * $i); ?></td>
        </tr>
     <?php } ?>
    </tbody>
</table>
</body>
</html>
