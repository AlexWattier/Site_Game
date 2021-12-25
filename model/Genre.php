<?php
require_once "Model.php";

/**
 * Class Game
 */
class Genre extends Model{

    /**
     * @return array
     */
    function getGenreGames(){
        $sql = 'SELECT g.GENRE_NAME as nameG , g.GENRE_ID as idG '
            . ' FROM genre as g' ;
        return $this->executeRequest($sql);
    }

    /**
     * @param $genre
     * @return array
     */
    function getThisGenreGames($genre){
        $sql = 'SELECT g.GAME_ID as gId, GAME_NAME , GAME_COVER_URL , GAME_SUMMARY '
            . ' FROM game_genre as g '
            . ' LEFT JOIN games as ga ON g.GAME_ID = ga.GAME_ID '
            . ' WHERE GENRE_ID = ' .$genre;
        return $this->executeRequest($sql);
    }

    /**
     * @param $genre
     * @return array
     */
    function getThisGenre($genre){
        $sql = 'SELECT g.GENRE_NAME as nameG , g.GENRE_ID as idG '
            . ' FROM genre as g '
            . ' WHERE GENRE_ID ='.$genre;
        return $this->executeRequest($sql);
    }


}