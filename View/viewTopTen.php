<?php ob_start(); ?>

    <div id="listAllGame" class="list-group">
        <?php $nbr=1; ?>
        <?php foreach ($games as $game): ?>
            <article>
                <div><h3><?= $nbr;?></h3></div>
                <div><img class="image_games" src=" <?= $game['coverUrl'] ?>  " alt="imgCoverUrl"></div>
                <div>
                    <h3 class="titreBillet">
                        <a href="/WEBR4/game/<?= $game['id'] ?> "><?= $game['name'] ?></a>
                    </h3>
                    <p><?= $game['description'] ?></p>
                </div>
            </article>
            <?php $nbr++; ?>
        <?php endforeach; ?>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>