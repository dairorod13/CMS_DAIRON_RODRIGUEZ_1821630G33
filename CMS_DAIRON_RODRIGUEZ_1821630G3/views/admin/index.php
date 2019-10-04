<h1>Lista de usuarios</h1>

<table class="table">
    <thead>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>correo</th>
        <th>rol</th>
    </thead>
    <tbody>
    <?php foreach(parent::all_users() as $user):  ?>
        <tr>
            <td><?= $user->id_user ?></td>
            <td><?= $user->nombre ?></td>
            <td><?= $user->apellido ?></td>
            <td><?= $user->correo ?></td>
            <td><?= $user->nombre_rol ?></td>
            <td width="200" class="table__options">
            <a href="?controller=administrador&method=edit_user&id_user=<?= $user->id_user?>">
                <button class="btn btn-outline-green">Editar</button>
            </a>
            <a href="?controller=administrador&method=delete_user&id_user=<?= $user->id_user?>">
                <button class="btn btn-outline-red">Borrar</button>
            </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

