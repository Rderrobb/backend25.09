<html>
<head>
 <title>Página de exibição</title>
 <charset="utf-8">
</head>
<body>
    <h1 align='center'>Exibir </h1>
    <h3 align = "center"> Usuários cadastrados</h3>
    <table border="1">
        <tr>
            <th>Código/Id</th>
            <th>Nome</th>
            <th>Nacionalidade</th>
        </tr>
        <?php foreach($pessoas as $pessoa): ?>
            <tr>
                <td><?php echo $pessoa['id'] ?></td>
                <td><?php echo $pessoa['nome'] ?></td>
                <td><?php echo $pessoa['naturalidade'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>