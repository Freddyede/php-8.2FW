<?php

namespace Core\Modules;

use Core\Interfaces\Modules\FilesReadersModulesInterface;

/**
 * @author Patouillard Franck<patouillardfranck3@gmail.com>
 * @class FilesReadersModules
 * @desc This class can read all files and all directory inside project
 */
class FilesReadersModules implements FilesReadersModulesInterface
{
    /**
     * @param string|null $parentDirectories directory from root directory
     * @param string|null $childsDirectories directory from parent directory if exists
     * @return array|null
     * @author Patouillard Franck<patouillardfranck3@gmail.com>
     * @desc returns all files from parent Directories and childsDirectories if parentDirectory and childsDirectory exists in project
     */
    public static function directoryReaders(?string $parentDirectories = NULL, ?string $childsDirectories = NULL): array|null
    {
        require __DIR__ . '/../../index.php';
        return (is_dir(INIT_DIRECTORY . '/' . $parentDirectories) && is_dir(INIT_DIRECTORY . '/' . $parentDirectories . '/' . $childsDirectories)) ? scandir(INIT_DIRECTORY . '/' . $parentDirectories . '/' . $childsDirectories) : NULL;
    }
}