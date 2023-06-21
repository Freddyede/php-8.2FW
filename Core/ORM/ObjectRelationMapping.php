<?php

namespace Core\ORM;

use Core\Modules\FilesReadersModules;

class ObjectRelationMapping
{

    public static array $entityObjects;


    /**
     * @return array
     * @author Alexandre Rodriguez<alexandre.rodriguez.arz@gmail.com>
     * @todo ORM property
     */
    public static function entityReader(): array
    {
        $directory = FilesReadersModules::directoryReaders('src', 'Entity');
        for ($i = 2; $i < count($directory); $i++) {
            var_dump($directory[$i]);
            str_replace("/", "\\", $directory[$i]);
        }
        return $directory;

    }
}