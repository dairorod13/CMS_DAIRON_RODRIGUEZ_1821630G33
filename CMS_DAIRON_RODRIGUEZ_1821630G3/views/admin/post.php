<section class="seccion1">
    <h1>Registro de Publicacion</h1>
<form action="?controller=administrador&method=store_post" method="POST" enctype="multipart/form-data">
    <input type="text" name="titulo" placeholder="Ingrese aquí el título de la publicación">
    <input type="text" name="contenido" placeholder="Ingrese aquí el contenido de la publicación">
    <input type="date" name="fecha">
    <input type="file" name="imagen">
    <input class="btn btn-outline-green" type="submit" value="Enviar">
</form> 
</section>