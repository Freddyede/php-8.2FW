<?php

namespace Core\ORM;

use App\Entity;

class ObjectRelationMapping
{

    public static array $entityObjects;


    /**
     * @return array
     * @todo ORM property
     */
    public static function entityReader(): array
    {
        $directory = scandir(__DIR__ . '/../../src/Entity');
        for ($i = 2; $i < count($directory); $i++) {
            var_dump($directory[$i]);
            str_replace("/", "\\", $directory[$i]);
        }
        return $directory;

    }
}