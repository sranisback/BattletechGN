<?php

include_once "DBManager.php";

class UnitManager extends DBManager
{
    /**
     * @param int $unitId
     * @return UnitModel
     */
    public function selectUnit(int $unitId): UnitModel
    {
        try {
            $sql = "CALL aff_article(:art);";

            $sqlResult = $this->getBase()->prepare($sql);
            $sqlResult->bindParam(':art',$postID);
            $sqlResult->execute();
            $resultPost = new UnitModel();
            $resultPost->setID($postID);

            if ($sqlResult->rowCount()>0) {
                while ($sqlReception = $sqlResult->fetch()) {
                    $resultPost->setTitle($sqlReception['titre']);
                    $resultPost->setImage($sqlReception['path_img']);
                    $resultPost->setComments($sqlReception['comment']);
                    $resultPost->setDate($sqlReception['date']);
                    $resultPost->setAuthorLogin($sqlReception['login']);
                    $resultPost->setAuthorID($sqlReception['id_auteur']);
                }
            }
            else {
                echo "<h2>Erreur 404</h2>
					<h3>Article introuvable !</h3>";
                return null;
            }
            return $resultPost;
        }
        catch (Exception $e) {
            die('Votre erreur fut : '.$e->getMessage().'. Repentez-vous.');
        }
    }
}