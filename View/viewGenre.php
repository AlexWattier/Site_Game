<?php ob_start(); ?>

    <div id="listAllGame" class="list-group">
        <?php foreach ($genres as $genre): ?>
            <article>
                <div>
                    <h3 class="titreBillet">
                        <a href="/WEBR4/Genre/<?=$genre['idG']?>"><?= $genre['nameG'] ?></a>
                    </h3>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>