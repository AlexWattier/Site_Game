<?php ob_start(); ?>
    <div id="listAllGame" class="list-group">
        <div class="container" style="width:900px;">
            <h2 align="center">Recherche</h2>
            <br/>
            <div align="center">
                <input type="text" name="search" id="search" placeholder="Search Game" class="form-control"/>
            </div>
            <ul class="list-group" id="resultsearch"></ul>
            <br/>
        </div>
        <?php if (!empty($_GET['s'])) { ?>
            <?php foreach ($games as $game): ?>
                <article>
                    <div><img class="image_games" src=" <?= $game['coverUrl'] ?>  " alt="imgCoverUrl"></div>
                    <div>
                        <h3 class="titreBillet"><a href="/WEBR4/game/<?= $game['id'] ?> "><?= $game['name'] ?></a>
                        </h3>
                        <p><?= $game['description'] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php } ?>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>