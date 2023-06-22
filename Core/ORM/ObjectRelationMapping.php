<?php

namespace Core\ORM;

use Core\Modules\DirectoryModules;
use Exception;

class ObjectRelationMapping
{

    public static array $entityObjects;


    /**
     * @return array
     * @author Rodriguez Alexandre<alexandre.rodriguez.arz@gmail.com>
     * @author Patouillard Franck<patouillardfranck3@gmail.com>
     * @todo ORM property
     */
    public static function entityReader(): array
    {
        try {
            $directory = DirectoryModules::directoryReaders('src', 'Entity');
            for ($i = 2; $i < count($directory); $i++) {
                var_dump($directory[$i]);
                str_replace("/", "\\", $directory[$i]);
            }
        } catch (Exception $exception) {
            $directory = $exception->getMessage();
        }
        return $directory;

    }
}