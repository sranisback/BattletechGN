<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>Page personnelle</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
use Managers;

displayUnitType();

function displayUnitType()
{
    $base = new PDO('mysql:host=127.0.0.1;dbname=69_patrick', 'ComStar', 'PtjBmffBq0soYmKm');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $unitTypeManager = new UnitTypeManager($base);

    $typeList = $unitTypeManager->selectUnitTypes();

    foreach ($typeList as $unitType) {
        if (get_class($unitType) === UnitTypeModel::class) {
            echo '<img src="'.ICONS_PATH.$unitType->getImage().'>';
        }
    }
}
