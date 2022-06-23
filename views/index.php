<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widt=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    <title>Estudos - clients</title>
</head>

<body>

    <?php
    include_once('./views/navbar.php');
    ?>
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
                <?php foreach ($resultData as $data) : ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['phone'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    
    <?php
    include_once './views/footer.php';
    ?>

</body>
</html>