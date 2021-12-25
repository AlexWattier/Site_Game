<?php ob_start(); ?>
    <div class="slide_img">
        <div class="slideshow-container">
            <div class="list-group" id="result">
                <?php foreach ($games as $game_slide): ?>
                    <article>
                        <div><img class="imageSlide" data-lazy=" <?= $game_slide['screenshot'] ?>  " alt="imgSlide"></div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <div id="listAllGame" class="list-group">
        <?php foreach ($games as $game): ?>
            <article>
                <div><img class="image_games" src=" <?= $game['coverUrl'] ?>  " alt="imgCoverUrl"></div>
                <div>
                    <h3 class="titreBillet"><a href="/WEBR4/game/<?= $game['id'] ?> "><?= $game['name'] ?></a></h3>
                    <p><?= $game['description'] ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>