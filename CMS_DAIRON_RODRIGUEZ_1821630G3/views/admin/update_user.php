<section class="seccion1">
    <h1>Registro de usuarios</h1>
<form action="?controller=administrador&method=update_usuarios" method="POST">
    <input type="hidden" name="id" value="<?=$data->id_user?>">
    <input type="text" name="nombre" value="<?= $data->nombre ?>">
    <input type="text" name="apellido" value="<?= $data->apellido ?>">
    <input type="email" name="correo" value="<?= $data->correo ?>">
    <input type="password" name="password" placeholder="***************">
    <input class="btn btn-outline-green" type="submit" value="Enviar">
</form> 
</section>