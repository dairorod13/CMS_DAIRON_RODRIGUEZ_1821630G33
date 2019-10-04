<h1>Publicaciones</h1>

<table class="table">
    <thead>
        <th>id</th>
        <th>titulo</th>
        <th>contenido</th>
        <th>fecha</th>
        <th>imagen</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $publication):  ?>
        <tr>
            <td><?= $publication->id_publicacion ?></td>
            <td><?= $publication ->titulo ?></td>
            <td><?= $publication ->contenido ?></td>
            <td><?= $publication ->fecha ?></td>
            <td><img class="img-publication" src="<?= $publication->imagen ?>" alt=""></td>
            <td width="200" class="table__options">
            <a href="?controller=administrador&method=edit&id_publication=<?= $publication->id_publicacion?>">
                <button class="btn btn-outline-green">Editar</button>
            </a>
            <a href="?controller=administrador&method=delete&id_publication=<?= $publication->id_publicacion?>">
                <button class="btn btn-outline-red">Borrar</button>
            </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody> 
</table>
