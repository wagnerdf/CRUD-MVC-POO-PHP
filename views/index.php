<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widt=device-width, initial-scale=1.0">
    <title>Estudos - clients</title>
</head>
<body>
    <h1>Lista de clientes</h1>
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th>ID: </th>
                    <th>Nome: </th>
                    <th>E-Mail:</th>
                    <th>Telefone: </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultData as $data): ?>
                    <tr>
                        <td><?= $data['id']?></td>
                        <td><?= $data['name']?></td>
                        <td><?= $data['email']?></td>
                        <td><?= $data['phone']?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>