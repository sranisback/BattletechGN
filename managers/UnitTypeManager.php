<?php
namespace Managers;

include_once "../models/UnitTypeModel.php";

class UnitTypeManager extends DBManager
{
    /**
     * Returns the list of unit types from the database.
     * @return array
     */
    public function selectUnitTypes()
    {
        $sql = 'CALL select_unit_types;';
        $sqlResult = $this->getBase()->prepare($sql);
        $sqlResult->execute();

        $typeList = array();

        while ($singleResult = $sqlResult->fetch()) {
            $singleType = new UnitTypeModel();
            $singleType->setName($singleResult['name']);
            $singleType->setCaliber($singleResult['caliber']);
            $singleType->setArmor($sqlResult['armor']);
            $singleType->setImage($sqlResult['image']);

            array_push($typeList, $singleType);
        }
        $sqlResult->closeCursor();

        return $typeList;
    }
}