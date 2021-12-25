<?php ob_start(); ?>

    <div class="game_info">
        <div>
            <title>Error 404 (Not Found)!!</title>
            <a href="/WEBR4/"><span aria-label=49707></span></a>
            <p><b>404.</b>
                <ins>That’s an error.</ins>
            <p>The requested URL was not found on this server.</p>
            <ins>That’s all we know.</ins>
        </div>
        <div>
            <img src="/WEBR4/Content/Image/robot.png"/>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>