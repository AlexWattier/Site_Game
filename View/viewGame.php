<?php ob_start(); ?>
    <div id="listAllGame" class="list-group">
        <?php foreach ($games as $game): ?>
            <article>
                <div><img class="image_games" src=" <?= $game['coverUrl'] ?>  " alt="imgCoverUrl"></div>
                <div>
                    <h3 class="titreBillet">
                        <a href="/WEBR4/game/<?= $game['id'] ?> "><?= $game['name'] ?></a>
                    </h3>
                    <p><?= $game['description'] ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>