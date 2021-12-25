<?php ob_start(); ?>
<?php if (!empty($game)) { ?>
    <div>
        <div class="name_game">
            <h1> <?= $game['name'] ?></h1>
        </div>
        <div class="game_info">
            <div>
                <img class="img_cover" src="<?= $game['coverUrl'] ?>" alt="imgSlide">
            </div>
            <div class="gridPaneRigth">
                <p class="score_game">Score: <?= round($game['rating'], 2) ?></p>
                <p id="datesortie"> Premiere sortie <?= $date['date'] ?></p>
                <?php if (!empty($plateform)) { ?>
                    <div>
                        <a id="datesortie">Plateform compatible : </a>
                        <?php foreach ($plateform as $plate): ?>
                            <a id="datesortie"
                               href="/WEBR4/Platform/<?= $plate['PLATFORM_ID'] ?>"><?= $plate['nameG'] ?>,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($develop)) { ?>
                    <div>
                        <a id="datesortie">Equipe de developpement : </a>
                        <?php foreach ($develop as $dev): ?>
                            <a id="datesortie"
                               href="/WEBR4/displayGameComp?genre=<?= $dev['COMPANY_NAME'] ?>"><?= $dev['COMPANY_NAME'] ?>
                                ,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($publish)) { ?>
                    <div>
                        <a id="datesortie">Equipe de publication : </a>
                        <?php foreach ($publish as $pub): ?>
                            <a id="datesortie"
                               href="/WEBR4/displayGameComp?genre=<?= $pub['COMPANY_NAME'] ?>"><?= $pub['COMPANY_NAME'] ?>
                                ,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($porti)) { ?>
                    <div>
                        <a id="datesortie">Equipe de porteur : </a>
                        <?php foreach ($porti as $por): ?>
                            <a id="datesortie"
                               href="/WEBR4/displayGameComp?genre=<?= $por['COMPANY_NAME'] ?>"> <?= $por['COMPANY_NAME'] ?>
                                ,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($supporti)) { ?>
                    <div>
                        <a id="datesortie">Equipe de support : </a>
                        <?php foreach ($supporti as $supp): ?>
                            <a id="datesortie"
                               href="/WEBR4/displayGameComp?genre=<?= $supp['COMPANY_NAME'] ?>"> <?= $supp['COMPANY_NAME'] ?>
                                ,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($genreGame)) { ?>
                    <div>
                        <a id="datesortie">Genre : </a>
                        <?php foreach ($genreGame as $genre): ?>
                            <a id="datesortie"
                               href="/WEBR4/Genre/<?= $genre['GENRE_ID'] ?>"> <?= $genre['GENRE_NAME'] ?>,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($mode)) { ?>
                    <div>
                        <a id="datesortie">Mode : </a>
                        <?php foreach ($mode as $mod): ?>
                            <a id="datesortie"
                               href="/WEBR4/Mode/<?= $mod['MODE_ID'] ?>"> <?= $mod['MODE_NAME'] ?>,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($theme)) { ?>
                    <div>
                        <a id="datesortie">Theme : </a>
                        <?php foreach ($theme as $them): ?>
                            <a id="datesortie"
                               href="/WEBR4/theme/<?= $them['THEME_ID'] ?>"> <?= $them['THEME_NAME'] ?>,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($franchise)) { ?>
                    <div>
                        <a id="datesortie">Franchise : </a>
                        <?php foreach ($franchise as $franchis): ?>
                            <a id="datesortie"
                               href="/WEBR4/franchise/<?= $franchis['FRANCHISE_ID'] ?>"> <?= $franchis['FRANCHISE_NAME'] ?>,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($engine)) { ?>
                    <div>
                        <a id="datesortie">Moteur : </a>
                        <?php foreach ($engine as $engin): ?>
                            <a id="datesortie"
                               href="/WEBR4/engine/<?= $engin['ENGINE_ID'] ?>"> <?= $engin['ENGINE_NAME'] ?>,</a>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="slide_img">
            <div class="slideshow-container">
                <div class="list-group" id="result">
                    <?php foreach ($screenshots as $game_slide): ?>
                        <article>
                            <div>
                                <img class="imageSlide" data-lazy=" <?= $game_slide['screenshot'] ?>" alt="imgSlide">
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <h3 class="game_info">description du jeu</h3>
        <p class="game_info"><?= $game['description'] ?></p>

        <?php if ($game['scenario'] != "NULL") { ?>
            <h3 class="game_info">scenario du jeu</h3>
            <p class="game_info"><?= $game['scenario'] ?></p>
        <?php } ?>

        <?php foreach ($video as $video_slide): ?>
            <article>
                <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/<?= $video_slide['video'] ?>"
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </article>
        <?php endforeach; ?>
    </div>
    <div id="listSimilar">
        <h3 class="game_info">jeux similaire</h3>
        <div class="similar" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
            <?php foreach ($similar as $similars): ?>
                <article>
                    <div>
                        <img class="image_games" src=" <?= $similars['game_cover'] ?>  " alt="imgCoverUrl">
                    </div>
                    <div>
                        <a href="/WEBR4/game/<?= $similars['id_other'] ?>"><h3
                                    class="titreBillet"><?= $similars['game_name'] ?></h3></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
    <?php $content = ob_get_clean(); ?>
    <?php require "template.php"; ?>
<?php } else {
    $content = ob_get_clean();
    require_once "ViewError.php";
}
?>

