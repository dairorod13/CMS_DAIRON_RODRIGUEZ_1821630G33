<h1>Lista de usuarios</h1>

<table class="table">
    <thead>
        <th>id</th>
        <th>titulo</th>
        <th>contenido</th>
        <th>fecha</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $publication):  ?>
        <tr>
            <td><?= $publication->id_publicacion ?></td>
            <td><?= $publication ->titulo ?></td>
            <td><?= $publication ->contenido ?></td>
            <td><?= $publication ->fecha ?></td>
            <td width="200" class="table__options">
                <button class="btn btn-outline-green">Editar</button>
                <button class="btn btn-outline-red">Borrar</button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
