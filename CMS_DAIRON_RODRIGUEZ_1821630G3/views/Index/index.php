
<style>
    .row{
        display: flex; 
        flex-wrap:wrap;       
        width: 100%;
    }
</style>

<div class="row">
    
        <?php foreach(parent::all() as $publication):  ?>
            <div id="panel" class="panel2">
                <div class="text2">
                <h3><?= $publication ->titulo ?></h3>
                </div>
                <img class="img-publication" src="<?= $publication->imagen ?>" alt="">
                <div class="text">
                <p><?= $publication ->fecha ?></p>
                <p><?= $publication ->contenido ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    
</div>



