<?php
namespace App\Service;
use App\Model\UnitType;
use SimpleXMLElement;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use XMLReader;

class BTService
{
    public function byzeu()
    {
        $resourcesDirectory = [__DIR__.'\..\Resources'];
        $typeXml = file_get_contents($resourcesDirectory[0].'\unit-types.xml');

        $unitTypes = new SimpleXMLElement($typeXml);

        dump($unitTypes->unit_type[1]);
    }
}