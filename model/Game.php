<?php
require_once "Model.php";

/**
 * Class Game
 */
class Game extends Model{

    /**
     * @return array list of all games with screen
     */
    function getAllPosts(){
        $sql = 'select g.GAME_ID as id, '
            . ' g.GAME_COVER_URL as coverUrl,'
            . ' s.SCREENSHOT_URL as screenshot,'
            . ' g.GAME_NAME as name,'
            . ' g.GAME_SUMMARY as description,'
            . ' g.GAME_AGGREGATED_RATING as rating, '
            . ' g.GAME_STORYLINE as scenario '
            . ' from games as g'
            . ' left join screenshots as s on g.GAME_ID = s.GAME_ID'
            . ' group by g.GAME_ID';
        return $this->executeRequest($sql);

    }

    /**
     * @param $id
     * @return array list of game info
     */
    function getPost($id){
        $sql = 'select g.GAME_ID as id, '
            . ' g.GAME_COVER_URL as coverUrl,'
            . ' g.GAME_NAME as name,'
            . ' g.GAME_SUMMARY as description,'
            . ' g.GAME_AGGREGATED_RATING as rating, '
            . ' g.GAME_STORYLINE as scenario '
            . ' from games as g '
            . ' where g.GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $id
     * @return array list of game screenshot
     */
    function getScreenshot($id){
        $sql = 'select SCREENSHOT_URL as screenshot '
            . ' from screenshots '
            . ' where GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $id
     * @return array list of game video
     */
    function getVideo($id){
        $sql = 'SELECT VIDEO_ID as video '
            . ' FROM videos '
            . ' WHERE GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $id
     * @return array list of games similar to the one received
     */
    function getSimilareGames($id){
        $sql = 'SELECT GAME_ID as id, '
            . ' OTHER_GAME_ID as id_other, '
            . ' OTHER_GAME_NAME as game_name, '
            . ' OTHER_GAME_COVER as game_cover '
            . ' FROM similar_games '
            .'where GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $id
     * @return array list of developers the one received
     */
    function getThisdeveloper($id){
        $sql = 'SELECT COMPANY_NAME '
            . ' FROM developer as d '
            . ' LEFT JOIN company as c ON d.COMPANY_ID = c.COMPANY_ID '
            . ' WHERE GAME_ID = ' .$id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $id
     * @return array list of publishers the one received
     */
    public function getThispublisher($id){
        $sql = 'SELECT COMPANY_NAME '
            . ' FROM publisher as p '
            . ' LEFT JOIN company as c ON p.COMPANY_ID = c.COMPANY_ID '
            . ' WHERE GAME_ID = ' .$id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $id
     * @return array  list of portings the one received
     */
    public function getThisporting($id){
        $sql = 'SELECT COMPANY_NAME '
            . ' FROM porting as p '
            . ' LEFT JOIN company as c ON p.COMPANY_ID = c.COMPANY_ID '
            . ' WHERE GAME_ID = ' .$id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $id
     * @return array list of supporting the one received
     */
    public function getThissupporting($id){
        $sql = 'SELECT COMPANY_NAME '
            . ' FROM supporting as s '
            . ' LEFT JOIN company as c ON s.COMPANY_ID = c.COMPANY_ID '
            . ' WHERE GAME_ID = ' .$id;
        return $this->executeRequest($sql);
    }


    /**
     * @param $id
     * @return array list of Plateform the one received
     */
    function getPlateformGames($id){
        $sql = 'SELECT g.GAME_ID as id, '
            . ' r.PLATFORM_ID, '
            . ' p.PLATFORM_NAME as nameG '
            . ' FROM games as g '
            . ' right join game_release as r on g.GAME_ID=r.GAME_ID '
            . ' LEFT JOIN platform as p on r.PLATFORM_ID = p.PLATFORM_ID '
            . ' where g.GAME_ID =' . $id
            . ' GROUP BY PLATFORM_ID';
        return $this->executeRequest($sql);
    }

    function getModeGames($id){
        $sql = 'SELECT g.MODE_NAME , g.MODE_ID '
            . ' FROM mode as g'
            . ' LEFT JOIN game_mode as gm ON g.MODE_ID = gm.MODE_ID '
            . ' WHERE gm.GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }


    function getThemeGames($id){
        $sql = 'SELECT g.THEME_NAME , g.THEME_ID '
            . ' FROM theme as g'
            . ' LEFT JOIN game_theme as gm ON g.THEME_ID = gm.THEME_ID '
            . ' WHERE gm.GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }

    public function getFranchiseGames($id){
        $sql = 'SELECT g.FRANCHISE_NAME , g.FRANCHISE_ID '
            . ' FROM franchise as g'
            . ' LEFT JOIN franchise_game as gm ON g.FRANCHISE_ID = gm.FRANCHISE_ID '
            . ' WHERE gm.GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }


    function getGameGenre($id){
        $sql = 'SELECT GENRE_NAME,'
            . ' gg.GENRE_ID'
            . ' FROM game_genre AS gg'
            . ' LEFT JOIN genre AS g ON gg.GENRE_ID = g.GENRE_ID'
            . ' WHERE GAME_ID =' .$id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $id
     * @return array first release date of the game
     */
    function getfirstDatesGames($id){
        $sql = 'SELECT MIN(r.RELEASE_DATE) as date '
            . 'FROM game_release as r '
            . 'where r.GAME_ID = ' . $id;
        return $this->executeRequest($sql);
    }

    /**
     * @param $s
     * @return array
     */
    function getSearchPost($s){
        $sql = 'select g.GAME_ID as id, '
            . ' g.GAME_COVER_URL as coverUrl,'
            . ' g.GAME_NAME as name, '
            . ' g.GAME_SUMMARY as description '
            . ' from games as g '
            . ' where GAME_NAME LIKE "%'.$s .'%" ';
        return $this->executeRequest($sql);
    }

    /**
     * @return array
     */
    function getTenGames(){
        $sql = 'SELECT GAME_ID as id , '
            . ' GAME_COVER_URL as coverUrl, GAME_NAME as name ,'
            . ' GAME_AGGREGATED_RATING as rating , '
            . ' GAME_SUMMARY as description, '
            . ' GAME_STORYLINE as scenario '
            . ' FROM games '
            . ' ORDER BY games.GAME_AGGREGATED_RATING DESC LIMIT 10';
        return $this->executeRequest($sql);
    }


    function getThisCompany($id){
        $sql = 'SELECT d.GAME_ID ,g.GAME_NAME ,g.GAME_COVER_URL , g.GAME_SUMMARY '
            . ' FROM developer AS d '
            . ' LEFT JOIN games as g ON g.GAME_ID = d.GAME_ID '
            . ' WHERE d.COMPANY_ID = ' .$id
            . ' UNION '
            . ' SELECT p.GAME_ID ,g.GAME_NAME , g.GAME_COVER_URL ,g.GAME_SUMMARY '
            . ' FROM publisher AS p '
            . ' LEFT JOIN games as g ON g.GAME_ID = p.GAME_ID '
            . ' WHERE p.COMPANY_ID = '.$id
            . ' UNION '
            . ' SELECT po.GAME_ID, g.GAME_NAME , g.GAME_COVER_URL ,g.GAME_SUMMARY '
            . ' FROM porting AS po '
            . ' LEFT JOIN games as g ON g.GAME_ID = po.GAME_ID'
            . ' WHERE po.COMPANY_ID = '.$id
            . ' UNION '
            . ' SELECT s.GAME_ID, g.GAME_NAME , g.GAME_COVER_URL , g.GAME_SUMMARY '
            . ' FROM supporting AS s '
            . ' LEFT JOIN games as g ON g.GAME_ID = s.GAME_ID'
            . ' WHERE s.COMPANY_ID =' .$id
            . ' GROUP BY GAME_ID';
        return $this->executeRequest($sql);
    }
    
    /**
     * @param $genre
     * @return array
     */
    function getThisComp($genre){
        $sql = 'SELECT c.COMPANY_ID as idG , c.COMPANY_NAME as nameG '
            . ' FROM company as c '
            . ' WHERE c.COMPANY_NAME ="'.$genre . '"';
        return $this->executeRequest($sql);
    }

    function getThisPlateform($genre){
        $sql ='SELECT g.GAME_ID , g.GAME_NAME ,g.GAME_COVER_URL ,g.GAME_SUMMARY'
            . ' FROM games as g'
            . ' LEFT JOIN game_platform as gp ON gp.GAME_ID = g.GAME_ID'
            . ' LEFT JOIN platform as p ON gp.PLATFORM_ID = p.PLATFORM_ID '
            . ' where p.PLATFORM_NAME = "'. $genre .'"';
        return $this->executeRequest($sql);
    }

    function getPlateformId($numGenre){
        $sql ='SELECT p.PLATFORM_NAME as nameG '
        . ' FROM platform as p '
        . ' where p.PLATFORM_ID =' . $numGenre;
        return $this->executeRequest($sql);
    }

    function getModeId($id){
        $sql = 'SELECT g.MODE_NAME as nameG'
            . ' FROM mode as g'
            . ' WHERE g.MODE_ID =' . $id;
        return $this->executeRequest($sql);
    }

    function getFranchiseId($id){
        $sql = 'SELECT g.FRANCHISE_NAME as nameG'
            . ' FROM franchise as g'
            . ' WHERE g.FRANCHISE_ID =' . $id;
        return $this->executeRequest($sql);
    }

    function getThisMode($nameG){
        $sql = 'SELECT g.GAME_ID , g.GAME_NAME ,g.GAME_COVER_URL ,g.GAME_SUMMARY '
            . ' FROM games as g'
            . ' LEFT JOIN game_mode as gm ON gm.GAME_ID = g.GAME_ID '
            . ' LEFT JOIN mode as m ON gm.MODE_ID = m.MODE_ID'
            . ' where m.MODE_NAME = "'. $nameG . '"';
        return $this->executeRequest($sql);
    }

    function getThemeId($id){
        $sql = 'SELECT g.THEME_NAME as nameG'
            . ' FROM theme as g'
            . ' WHERE g.THEME_ID =' . $id;
        return $this->executeRequest($sql);
    }

    function getThisTheme($nameG){
        $sql = 'SELECT g.GAME_ID , g.GAME_NAME ,g.GAME_COVER_URL ,g.GAME_SUMMARY '
            . ' FROM games as g '
            . ' LEFT JOIN game_theme as gm ON gm.GAME_ID = g.GAME_ID '
            . ' LEFT JOIN theme as m ON gm.THEME_ID = m.THEME_ID '
            . ' where m.THEME_NAME = "'. $nameG . '"';
        return $this->executeRequest($sql);
    }

    public function getThisFranchise($nameG){
        $sql = 'SELECT g.GAME_ID , g.GAME_NAME ,g.GAME_COVER_URL ,g.GAME_SUMMARY '
            . ' FROM games as g '
            . ' LEFT JOIN franchise_game as gm ON gm.GAME_ID = g.GAME_ID '
            . ' LEFT JOIN franchise as m ON gm.FRANCHISE_ID = m.FRANCHISE_ID '
            . ' where m.FRANCHISE_NAME = "'. $nameG . '"';
        return $this->executeRequest($sql);
    }

    function getEngineId($id){
        $sql = 'SELECT g.ENGINE_NAME as nameG'
            . ' FROM engine as g'
            . ' WHERE g.ENGINE_ID =' . $id;
        return $this->executeRequest($sql);
    }

    function getThisEngine($nameG){
        $sql = 'SELECT g.GAME_ID , g.GAME_NAME ,g.GAME_COVER_URL ,g.GAME_SUMMARY '
            . ' FROM games as g '
            . ' LEFT JOIN game_engine as gm ON gm.GAME_ID = g.GAME_ID '
            . ' LEFT JOIN engine as m ON gm.ENGINE_ID = m.ENGINE_ID '
            . ' where m.ENGINE_NAME = "'. $nameG . '"';
        return $this->executeRequest($sql);
    }

    function getEngineGames($id){
        $sql = 'SELECT g.ENGINE_NAME , g.ENGINE_ID '
            . ' FROM engine as g'
            . ' LEFT JOIN game_engine as gm ON g.ENGINE_ID = gm.ENGINE_ID '
            . ' WHERE gm.GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }


}
