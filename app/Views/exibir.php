<html>
<head>
 <title>Página de exibição</title>
 <charset="utf-8">
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-primary">
    <h1 align='center' class="text-white">Exibir </h1>
    <h3 align = "center" class="text-white"> Usuários cadastrados</h3>
    <div>
        <table border="1" class="table table-dark table-striped container-md text-center"'>
            <tr>
                <th>Código/Id</th>
                <th>Nome</th>
                <th>Nacionalidade</th>
            </tr>
            <?php foreach($pessoas as $pessoa): ?>
                <tr>
                    <td><?php echo $pessoa['Id'] ?></td>
                    <td><?php echo $pessoa['Nome'] ?></td>
                    <td><?php echo $pessoa['Naturalidade'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>