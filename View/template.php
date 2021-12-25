<!doctype html>
<html lang="fr">
<head>
    <title>JEUX_49707.COM</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/WEBR4/Style/Style_Slides.css">
    <link rel="stylesheet" href="/WEBR4/Style/Styles.css">
    <link rel="stylesheet" href="/WEBR4/Style/Styles_Game.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="global">
    <header>
        <img class="imagelogo" src="/WEBR4/Content/Image/logo.jpg" alt="logo">
        <div id="navig" class="container">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="/WEBR4/">49707</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="/WEBR4/displayGame">JEUX</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/WEBR4/displayTenGame">TOP 10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/WEBR4/displayGenre">GENRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="https://discord.com/">DISCORD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/WEBR4/displayContact">CONTACT</a>
                    </li>
                </ul>
                <?php if (empty($_GET['action']) || $_GET['action'] != "search") { ?>
                    <form class="form-inline" action="?action=search">
                        <input name="s" class="form-control mr-sm-2" type="search" placeholder="Search"
                               aria-label="Search">
                        <input type="hidden" name="action" value="search">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                <?php } ?>
            </nav>
        </div>
    </header>
    <main id="contenu" class="container">
        <?= $content ?>
    </main> <!-- #contenu -->
    <footer id="piedBlog">
        49707 Wattier Alexandre
    </footer>
</div> <!-- #global -->

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/WEBR4/Script/SlidesShow.js"></script>
<script src="/WEBR4/Script/Recherche.js"></script>
</body>
</html>