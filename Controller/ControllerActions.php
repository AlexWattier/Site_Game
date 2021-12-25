<?php
require_once "model/Game.php";
require_once  "model/Genre.php";

function allPosts(){
    $myRequest = new Game();
    $games = $myRequest->getAllPosts();
    require "View/vueAccueil.php";
}

function displayGame(){
    $myRequest = new Game();
    $games = $myRequest->getAllPosts();
    require "View/viewGame.php";
}

function game(){
    $myRequest = new Game();
    $game = $myRequest->getPost($_GET['id']);

    if (!empty($game)) {
        $game = $game[0];
        $id = $_GET['id'];
        $screenshots = $myRequest->getScreenshot($id);
        $video = $myRequest->getVideo($id);
        $similar = $myRequest->getSimilareGames($id);
        $plateform = $myRequest->getPlateformGames($id);
        $develop = $myRequest->getThisdeveloper($id);
        $publish =$myRequest->getThispublisher($id);
        $porti = $myRequest->getThisporting($id);
        $supporti =$myRequest->getThissupporting($id);
        $mode = $myRequest->getModeGames($id);
        $theme = $myRequest->getThemeGames($id);
        $franchise = $myRequest->getFranchiseGames($id);
        $engine = $myRequest->getEngineGames($id);
        $genreGame = $myRequest->getGameGenre($id);
        $date = $myRequest->getfirstDatesGames($id);
        $date = $date[0];
    }
    require "View/viewthisGame.php";
}

function displayContact(){
    require "View/viewContact.php";
}

function search(){
    $myRequest = new Game();
    $games = $myRequest->getSearchPost($_GET['s']);

    if (!empty($_GET['json'])) {
        header('Content-Type: application/json');
        echo json_encode($games);
    } else {
        require "View/viewSearch.php";
    }
}

function displayTenGame(){
    $myRequest = new Game();
    $games = $myRequest->getTenGames();
    require "View/viewTopTen.php";
}

function displayGenre(){
    $myRequest = new Game();
    $myRequestGenre = new Genre();
    $genres = $myRequestGenre->getGenreGames();
    require "View/viewGenre.php";
}

function Genre(){
    $myRequest = new Genre();
    $numGenre = $_GET['id'];
    $gamesGenre = $myRequest->getThisGenreGames($numGenre);
    $thisGenre = $myRequest->getThisGenre($numGenre);
    $thisGenre = $thisGenre[0];
    require "View/viewGameGenre.php";
}

function Mode(){
    $myRequest = new Game();
    $numGenre = $_GET['id'];
    $thisGenre = $myRequest->getModeId($numGenre);
    $thisGenre = $thisGenre[0];
    $gamesGenre = $myRequest->getThisMode($thisGenre['nameG']);
    require "View/viewGameComp.php";
}

function theme(){
    $myRequest = new Game();
    $numGenre = $_GET['id'];
    $thisGenre = $myRequest->getThemeId($numGenre);
    $thisGenre = $thisGenre[0];
    $gamesGenre = $myRequest->getThisTheme($thisGenre['nameG']);
    require "View/viewGameComp.php";
}

function franchise(){
    $myRequest = new Game();
    $numGenre = $_GET['id'];
    $thisGenre = $myRequest->getFranchiseId($numGenre);
    $thisGenre = $thisGenre[0];
    $gamesGenre = $myRequest->getThisFranchise($thisGenre['nameG']);
    require "View/viewGameComp.php";
}

function engine(){
    $myRequest = new Game();
    $numGenre = $_GET['id'];
    $thisGenre = $myRequest->getEngineId($numGenre);
    $thisGenre = $thisGenre[0];
    $gamesGenre = $myRequest->getThisEngine($thisGenre['nameG']);
    require "View/viewGameComp.php";
}


function displayGameComp(){
    $myRequest = new Game();
    $numGenre = $_GET['genre'];
    $thisGenre = $myRequest->getThisComp($numGenre);
    $thisGenre = $thisGenre[0];
    $gamesGenre = $myRequest->getThisCompany($thisGenre['idG']);
    require "View/viewGameComp.php";
}

function Platform(){
    $myRequest = new Game();
    $numGenre = $_GET['id'];
    $thisGenre = $myRequest->getPlateformId($numGenre);
    $thisGenre = $thisGenre[0];
    $gamesGenre = $myRequest->getThisPlateform($thisGenre['nameG']);
    require "View/viewGameComp.php";
}

