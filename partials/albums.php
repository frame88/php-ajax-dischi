<?php
include __DIR__ . '/../server/db.php';
?>
    <?php foreach($albums as $album) {?>
        <div class="album">
            <div class="album-cover">
        <img src="<?php echo $album['poster'] ?>" alt="">   
        </div>
        <h3><?php echo $album['title'] ?></h3>
        <p><?php echo $album['author'] ?></p>
        <p><?php echo $album['year'] ?></p>

    </div>
    <?php } ?>