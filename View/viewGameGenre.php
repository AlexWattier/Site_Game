<?php ob_start(); ?>

    <h2 class="titreBillet">
        <a><?= $thisGenre['nameG'] ?></a>
    </h2>
    <div id="listAllGame" class="list-group">
        <?php foreach ($gamesGenre as $gameGenre): ?>
            <article>
                <div><img class="image_games" src=" <?= $gameGenre['GAME_COVER_URL'] ?>  " alt="imgCoverUrl"></div>
                <div>
                    <h3 class="titreBillet">
                        <a href="/WEBR4/game/<?= $gameGenre['gId'] ?> "><?= $gameGenre['GAME_NAME'] ?></a>
                    </h3>
                    <p><?= $gameGenre['GAME_SUMMARY'] ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>