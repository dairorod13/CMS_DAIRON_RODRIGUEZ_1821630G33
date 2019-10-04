<section class="seccion1">
    <h1>Registro de Modificar</h1>
<form action="?controller=administrador&method=update" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_publicacion" value="<?= $busqueda->id_publicacion ?>">
    <input type="text" name="titulo" value="<?= $busqueda->titulo?>" >
    <input type="text" name="contenido" value="<?= $busqueda->contenido?>">
    <input type="date" name="fecha" value="<?= $busqueda->fecha?>">
    <input type="file" name="imagen" value="<?= $busqueda->imagen?>">
    <input class="btn btn-outline-green" type="submit" value="Modificar">
</form> 
</section>

