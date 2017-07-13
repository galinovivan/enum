<?php
/**
 * Created by PhpStorm.
 * User: 91178
 * Date: 12.07.2017
 * Time: 22:53
 */

namespace caseweb\EnumModels;


class EnumModels
{
    /**
     * @param $modelsDir
     * @return array
     */
    public static function getEnumModels($modelsDir) {
        $files  = scandir($modelsDir);

        $models = [];

        foreach ($files as $file) {
            if ($file == '.' || $file == '..' || !preg_match('\.php', $file)) continue;
            $models[] = preg_replace('\.php$', '', $file);
        }
        return $models;
    }
}