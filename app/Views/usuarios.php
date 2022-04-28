<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Usuario</title>
</head>

<body>
    <div class="container mt-5">

        <?php echo anchor(base_url('usuario/create'), 'Novo Usuario', ['class' => 'btn btn-outline-success mb-3']) ?>

        <table class="table" id="usuarios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobre Nome</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Açoes</th>
                </tr>
            </thead>

            <?php foreach ($usuarios as $user) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['nome'] ?></td>
                        <td><?php echo $user['sobrenome'] ?></td>
                        <td><?php echo $user['login'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <?php echo anchor('usuario/editar/' . $user['id'], 'Editar', ['class' => 'btn btn-outline-success mb-3']) ?>
                            
                            <?php echo anchor('usuario/delete/' . $user['id'], 'Excluir', ['class' => 'btn btn-outline-danger mb-3', 'onclick' => 'return confirma()']) ?>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>    
        </table>
        <?php echo anchor(base_url('login/signout'), 'Sair', ['class' => 'btn btn-block btn-outline-danger mb-5']) ?>
    </div>
</body>

</html>